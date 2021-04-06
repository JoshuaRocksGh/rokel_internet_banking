<?php

namespace App\Http\Controllers\API\Transfer;

use App\Http\classes\API\BaseResponse;
use App\Http\classes\WEB\UserAuth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class SameBankController extends Controller
{
    //
    public function beneficiary_payment_from_account(){

        $user = (object) UserAuth::getDetails();
        //return $user;

        $authToken = $user->userToken;
        $userID = $user->userId;

        $base_response = new BaseResponse();

        $data = [
            "authToken" => $authToken,
            "userId"    => $userID
        ];

        $response = Http::post(env('API_BASE_URL') ."/account/getAccounts",$data);

        //return $response->body();

        //return  $response->body();


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

    public function beneficiary_payment_to_account()
    {

        $user = (object) UserAuth::getDetails();
        //return $user;

        $authToken = $user->userToken;
        $userID = $user->userId;

        $base_response = new BaseResponse();

        $data = [
            "authToken" => $authToken,
            "userId"    => $userID
        ];

        $response = Http::get("http://localhost/IIE/same-bank-beneficiary.php",$data);

        //return $response;
        // return $response->status();


    if($response->ok()){    // API response status code is 200

        $result = json_decode($response->body());
        // return $result->responseCode;


        if($result->responseCode == '000'){

            return $base_response->api_response($result->responseCode, $result->message,  $result->data); // return API BASERESPONSE

        }else{   // API responseCode is not 000

            return $base_response->api_response($result->responseCode, $result->message,  $result->data); // return API BASERESPONSE

            }

        } else { // API response status code not 200

             return $response->body();
            // DB::table('error_logs')->insert([
            //     'platform' => 'ONLINE_INTERNET_BANKING',
            //     'user_id' => 'AUTH',
            //     'code' => $response->status(),
            //     'message' => $response->body()
            // ]);

            return $base_response->api_response('500', 'API SERVER ERROR',  NULL); // return API BASERESPONSE

        }
    }

    /*>>>>>>>>>>>>>>>>>>>>>>>>>>> SELECT BENEFICIARY API <<<<<<<<<<<<<<<<<<<<<<<< */

    public function transfer_to_beneficiary(Request $req)
    {
        $validate = Validator::make($req->all(),[
            'from_account' => 'required' ,
            'to_account' => 'required' ,
            'transfer_amount' => 'required' ,
            'category' => 'required' ,
            //'select_frequency' => 'required' ,
            'purpose' => 'required' ,

        ]);

        // return $req;

        $base_response = new BaseResponse();

        $from_account = $req->from_account_ ;
        $to_account = $req->to_account_ ;
        $transfer_amount = $req->transfer_amount ;
        $category = $req->category_ ;
        //'select_frequency' : select_frequency_ ,
        $purpose = $req->purpose ;
        //'schedule_payment_type' : schedule_payment_contraint_input ,
        $schedule_payment_date = $req->schedule_payment_date;

        $data = [

            "amount"=> $req->transfer_amount,
            "authToken"=> "string",
            "creditAccount"=> $req->to_account_,
            "debitAccount"=> $req->from_account_,
            "deviceIp"=> "string",
            "entrySource"=> "string",
            "narration"=> "string",
            "secPin"=> "string",
            "userName"=> "string"

        ];

        // if($schedule_paymen == "Y")
        // {
        //     $data['schedule_date'] = '03-23-20021';
        // }


        // $from_account = $req->from_account;

        try{

            $response = Http::post('http://localhost/IIE/own-account.php',$data);

            // return json_decode($response->body();

            if($response->ok()){ // API response status code is 200

                $result = json_decode($response->body());
                return $result;

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
