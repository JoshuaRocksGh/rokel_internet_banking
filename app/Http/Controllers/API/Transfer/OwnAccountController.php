<?php

namespace App\Http\Controllers\API\Transfer;

use App\Http\classes\API\BaseResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class OwnAccountController extends Controller
{
    //
    public function own_account_(){

        $base_response = new BaseResponse();

        $response = Http::get('http://localhost/IIE/own-account.php');
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
            'select_frequency' => 'required' ,
            'purpose' => 'required' ,
            'schedule_payment_type' => 'required' ,
            'schedule_payment_date' => 'required',

        ]);
            // return $req ;

        $base_response = new BaseResponse();


        // VALIDATION
        if ($validator->fails()) {

            return $base_response->api_response('500', $validator->errors(), NULL);

        }else
        // return $req;

        $from_account = $req->from_account;

        try{

            $response = Http::post('http://localhost/IIE/own-account.php', [
                'from_account' => $from_account ,
                'to_account' => 'required' ,
                'transfer_amount' => 'required' ,
                'category' => 'required' ,
                'select_frequency' => 'required' ,
                'purpose' => 'required' ,
                'schedule_payment_type' => 'required' ,
                'schedule_payment_date' => 'required',
            ]);

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

