<?php

namespace App\Http\Controllers\API\Transfer;

use App\Http\classes\API\BaseResponse;
use App\Http\classes\WEB\UserAuth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class OwnAccountController extends Controller
{
    //
    public function own_account_(){

        $user = (object)  UserAuth::getDetails();
        // return $user;

        $authToken = $user->userToken;
        $userID = $user->userId;

        $base_response = new BaseResponse();

        $data = [
            "authToken" => $authToken,
            "userId"    => $userID
        ];

        $response = Http::post(env('API_BASE_URL') ."/account/getAccounts",$data);

        // return $response->body();


    if($response->ok()){    // API response status code is 200

        $result = json_decode($response->body());
        // return $result->responseCode;


        if($result->responseCode == '000'){

            return $base_response->api_response($result->responseCode, $result->message,  $result->data); // return API BASERESPONSE

        }else{   // API responseCode is not 000

            return $base_response->api_response($result->responseCode, $result->message,  $result->data); // return API BASERESPONSE

            }

        } else { // API response status code not 200

            DB::table('error_logs')->insert([
                'platform' => 'ONLINE_INTERNET_BANKING',
                'user_id' => 'AUTH',
                'code' => $response->status(),
                'message' => $response->body()
            ]);

            return $base_response->api_response('500', 'API SERVER ERROR',  NULL); // return API BASERESPONSE

        }
    }

    public function own_account_transfer(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'from_account' => 'required' ,
            'to_account' => 'required' ,
            'transfer_amount' => 'required' ,
            'category' => 'required' ,
            // 'select_frequency' => 'required' ,
            'purpose' => 'required' ,
            // 'schedule_payment_type' => 'required' ,
            // 'schedule_payment_date' => 'required',

        ]);
            // return $req ;

        $base_response = new BaseResponse();


        // VALIDATION
        if ($validator->fails()) {

            return $base_response->api_response('500', $validator->errors(), NULL);

        };
        // return $req;

        $user_pin = $req->secPin;

        // return $user_pin;
        if($user_pin != '123456'){

            return $base_response->api_response('099', 'Incorrect Pin',  null); // return API BASERESPONSE

        }

        $user = (object) UserAuth::getDetails();
        //return $user;

        $authToken = $user->userToken;
        $userID = $user->userId;


        $from_account = $req->from_account;
        // 'from_account' : from_account_ ,
        // 'to_account' : to_account_ ,
        // 'transfer_amount' : transfer_amount ,
        // 'category' : category_ ,
        // 'select_frequency' : select_frequency_ ,
        // 'purpose' : purpose ,
        // 'schedule_payment_type' : schedule_payment_contraint_input ,
        // 'schedule_payment_date' : schedule_payment_date,
        // 'secPin' : pin


        $data = [

                "amount" => $req->transfer_amount,
                "authToken" => $authToken ,
                "creditAccount" => $req->to_account,
                "currency" => "string",
                "debitAccount" => $req->from_account,
                "deviceIp" => "string",
                "entrySource" => "string",
                "narration" => $req->purpose,
                "secPin" => $user_pin,
                "userName" => "string" ,
                "category" => $req->category ,


            ];


        if(isset($req->select_frequency)){
            $frequency = $req->select_frequency;
            // return $frequency;
            $selected_frequency_code = $frequency ;
            $data['schedulePaymentDate'] = $req->schedule_payment_date;
            $data['selectFrequency'] = $selected_frequency_code;
        }

        // return $data ;

        try{

            $response = Http::post(env('API_BASE_URL') ."transfers/sameBank",$data);


            // return json_decode($response->body();

            if($response->ok()){ // API response status code is 200

                $result = json_decode($response->body());
                // return $result;

                if($result->responseCode == '000'){

                    // $result_data = $result->data;
                    // return $result_data;

                    return $base_response->api_response($result->responseCode, $result->message,  $result->data); // return API BASERESPONSE



                } else {  // API responseCode is not 000

                return $base_response->api_response($result->responseCode, $result->message,  $result->data); // return API BASERESPONSE

                }

            } else { // API response status code not 200

                DB::table('error_logs')->insert([
                    'platform' => 'ONLINE_INTERNET_BANKING',
                    'user_id' => 'AUTH',
                    'code' => $response->status(),
                    'message' => $response->body()
                ]);

                return $base_response->api_response('500', 'API SERVER ERROR',  NULL); // return API BASERESPONSE

            }


        }catch(\Exception $e){

            DB::table('error_logs')->insert([
                'platform' => 'ONLINE_INTERNET_BANKING',
                'user_id' => 'AUTH',
                'message' => (string) $e->getMessage()
            ]);

            return $base_response->api_response('500', $e->getMessage(),  NULL); // return API BASERESPONSE


        }


    }
}
