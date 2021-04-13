<?php

namespace App\Http\Controllers\GeneralFunctions;

use App\Http\classes\API\BaseResponse;
use App\Http\classes\WEB\UserAuth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class FunctionsController extends Controller
{
    
    public function currency_list(){

        $user = (object) UserAuth::getDetails();
        //return $user;

        $authToken = $user->userToken;
        $userID = $user->userId;

        $base_response = new BaseResponse();

        $data = [
            "authToken" => $authToken,
            "userId"    => $userID
        ];

        $response = Http::get(env('API_BASE_URL') ."/utilities/getCurrencies");

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
             DB::table('error_logs')->insert([
                 'platform' => 'ONLINE_INTERNET_BANKING',
                 'user_id' => 'AUTH',
                 'code' => $response->status(),
                 'message' => $response->body()
             ]);

            return $base_response->api_response('500', 'API SERVER ERROR',  NULL); // return API BASERESPONSE

        }
    }


    
    public function security_question(){

        $user = (object) UserAuth::getDetails();
        //return $user;

        $authToken = $user->userToken;
        $userID = $user->userId;

        $base_response = new BaseResponse();

        $data = [
            "authToken" => $authToken,
            "userId"    => $userID
        ];

        $response = Http::get(env('API_BASE_URL') ."/utilities/getSecQuestions");

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
