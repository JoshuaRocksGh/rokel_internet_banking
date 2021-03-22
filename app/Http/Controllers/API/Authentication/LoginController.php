<?php

namespace App\Http\Controllers\API\Authentication;

use App\Http\classes\API\BaseResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    //

    public function login_(Request $req)
    {

        $validator = Validator::make($req->all(), [
            'user_id' => 'required',
            'password' => 'required'
        ]);

        $base_response = new BaseResponse();

        // VALIDATION
        if ($validator->fails()) {

            return response()->json(
                $base_response->api_response('500', $validator->errors(),  NULL),
                200
            );
            
        };

        try {

            $response = Http::post('http://192.168.1.195:84/IIE/login.php', [
                'email' => 'required',
                'password' => 'required'
            ]);

            if ($response->ok()) { // API response status code is 200

                $result = json_decode($response->body());

                if ($result->responseCode == '000') {   // API responseCode is 000

                    return  $base_response->api_response($result->responseCode, $result->message,  $result->data); // return API BASERESPONSE

                } else {  // API responseCode is not 000

                    return $base_response->api_response($result->responseCode, $result->message,  $result->data); // return API BASERESPONSE

                }

            } else { // API response status code not 200

                return $base_response->api_response('500', 'API SERVER ERROR',  NULL); // return API BASERESPONSE

            }

        } catch (\Exception $e) {

            return $base_response->api_response('500', $e->getMessage(),  NULL); // return API BASERESPONSE

        }
    }
}
