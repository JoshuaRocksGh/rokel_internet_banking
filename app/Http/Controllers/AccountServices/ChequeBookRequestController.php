<?php

namespace App\Http\Controllers\AccountServices;

use App\Http\classes\API\BaseResponse;
use App\Http\classes\WEB\UserAuth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class ChequeBookRequestController extends Controller
{
    //function or method to hit the cheque book request api
    public function cheque_book_request(){

        $authToken = session()->get('userToken');
        $userID = session()->get('userId');

        $base_response = new BaseResponse();

        $data = [

                "accountNumber"=> "004001100241700194",
                "branch" => "string",
                "deviceIP" => "string",
                "numberOfLeaves" => 25,
                "pinCode" =>"1234",
                "tokenID" => "5CF53285-3558-4129-9363-3D2D41E8A5D7"

        ];
        // return $data;

        $response = Http::post(env('API_BASE_URL') ."/request/chequeBook",$data);
        // return $response;


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
             DB::table('error_logs')->insert([
                 'platform' => 'ONLINE_INTERNET_BANKING',
                 'user_id' => 'AUTH',
                 'code' => $response->status(),
                 'message' => $response->body()
             ]);

            return $base_response->api_response('500', 'API SERVER ERROR',  NULL); // return API BASERESPONSE

        }
    }
}
