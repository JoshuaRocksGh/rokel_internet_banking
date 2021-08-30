<?php

namespace App\Http\Controllers\Authentication;

use App\Http\classes\API\BaseResponse;
use App\Http\classes\WEB\ApiBaseResponse;
use App\Http\classes\WEB\UserAuth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Log;


class LoginController extends Controller
{

    public function login()
    {
        if (session()->get('userToken')) {
            return redirect('/home');
        }

        return view('pages.authentication.login');
    }

    public function self_enroll()
    {
        return view('self_enroll');
    }


    public function login_(Request $req)
    {

        $validator = Validator::make($req->all(), [
            'user_id' => 'required',
            'password' => 'required'
        ]);

        $base_response = new BaseResponse();

        // VALIDATION
        if ($validator->fails()) {

            return $base_response->api_response('500', $validator->errors(), NULL);
        };
        // return $req;

        // return $req;
        $user_id = strtoupper($req->user_id);
        $password = $req->password;

        // return $user_id . " - " . $password;
        $data =  [
            "appVersion" => "string",
            "brand" => "string",
            "country" => "string",
            "deviceId" => "string",
            "deviceIp" => "string",
            "deviceOs" => "A",
            "manufacturer" => "string",
            "model" => "string",
            "password" => $password,
            "userId" => $user_id
        ];

        // return $data;

        // dd(env('API_BASE_URL') . "/user/login");


        try {

            $response = Http::post(env('API_BASE_URL') . "user/login", $data);

            if ($response->ok()) { // API response status code is 200

                $result = json_decode($response->body());


                if ($result->responseCode == '000') { // API responseCode is 000

                    $result_data = $result->data;

                    // return (string) json_decode($result_data);

                    // CHECK FOR USER TYPE PERSONAL OR CORPORATE
                    /*
                    if ($result_data->c_type == 'C') {
                        return  $base_response->api_response('900', 'This is a corporate user not allowed here',  NULL);
                    }
                    */

                    $userDetail = $result->data;
                    $customerType = $userDetail->customerType;

                    // if ($customerType != "I") {
                    //     return  $base_response->api_response("422", "Corporate users not allowed",  null);
                    // }


                    session([
                        "userId" => $userDetail->userId,
                        "userAlias" => $userDetail->userAlias,
                        "updateFlag" => $userDetail->updateFlag,
                        "setPin" => $userDetail->setPin,
                        "changePassword" => $userDetail->changePassword,
                        "email" => $userDetail->email,
                        "firstTimeLogin" => $userDetail->firstTimeLogin,
                        "userToken" => $userDetail->userToken,
                        "customerNumber" => $userDetail->customerNumber,
                        "customerPhone" => $userDetail->customerPhone,
                        "updateUrl" => $userDetail->updateUrl,
                        // "c_type" => $userDetail->c_type,
                        "lastLogin" => $userDetail->lastLogin,
                        "customerType" => $userDetail->customerType,
                        "checkerMaker" => $userDetail->checkerMaker,
                        "menus" => $userDetail->menus,
                        // "checkerMaker" => 'M',
                        "userMandate" => 'A',
                        "headers" => [
                            "x-api-key" => "123",
                            "x-api-secret" => "123",
                            "x-api-source" => "123",
                            "x-api-token" => "123"
                        ]

                    ]);

                    $api_headers = [];
                    // return session();
                    // return session()->get('customerPhone');

                    $authToken = session()->get('userToken');

                    $userID = session()->get('userId');
                    // return $authToken;
                    // return session();

                    // return redirect()->route('home');

                    // return $result_data->user_id;


                    /*

                    // return $result_data->user_id;
                    try {
                        $id = DB::table('users')->insert([
                            'email' => $result_data->email,
                            'user_id' => $result_data->user_id,
                            'customer_no' => $result_data->customer_no,
                            'f_login' => $result_data->f_login,
                            'c_type' => $result_data->c_type,
                        ]);
                        // dd($id);
                    } catch (\Exception $th) {
                        //  return $th->getMessage();
                         DB::table('tb_error_logs')->insert([
                            'platform' => 'ONLINE_INTERNET_BANKING',
                            'user_id' => 'AUTH',
                            'message' => (string) $th->getMessage()
                        ]);

                         return $th->getMessage();
                    }

               */

                    //   return  $base_response->api_response($result->responseCode, $result->message,  $result->data);
                    return  $base_response->api_response($result->responseCode, $result->message,  $result->data); // return API BASERESPONSE

                } else {  // API responseCode is not 000

                    return $base_response->api_response($result->responseCode, $result->message,  $result->data); // return API BASERESPONSE

                }
            } else { // API response status code not 200

                DB::table('tb_error_logs')->insert([
                    'platform' => 'ONLINE_INTERNET_BANKING',
                    'user_id' => 'AUTH',
                    'code' => $response->status(),
                    'message' => $response->body()
                ]);

                return $base_response->api_response('500', 'API SERVER ERROR',  NULL); // return API BASERESPONSE

            }
        } catch (\Exception $e) {

            DB::table('tb_error_logs')->insert([
                'platform' => 'ONLINE_INTERNET_BANKING',
                'user_id' => 'AUTH',
                'message' => (string) $e->getMessage()
            ]);

            return $base_response->api_response('500', 'CONNECTION SERVER ERROR',  NULL); // return API BASERESPONSE



        }
    }

    public function forgot_password(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'security_answer' => 'required',
            'password' => 'required',
            'security_question' => 'required',
            'user_id' => 'required'
        ]);

        // return $request;

        $base_response = new BaseResponse();

        // VALIDATION
        if ($validator->fails()) {

            return $base_response->api_response('500', $validator->errors(), NULL);
        };

        $authToken = session()->get('userToken');
        $userID = session()->get('userId');
        $client_ip = request()->ip();

        $data = [
            "deviceBrand" => null,
            "deviceCountry" => null,
            "deviceId" => "I",
            "deviceIp" => $client_ip,
            "newPassword" => $request->password,
            "securityAnswer" => $request->security_answer,
            "securityQuestion" => $request->security_question,
            "userId" => $request->user_id
        ];

        // return $data;

        try {

            $response = Http::post(env('API_BASE_URL') . "user/forgotPassword", $data);

            $result = new ApiBaseResponse();
            return $result->api_response($response);
            // return json_decode($response->body();

        } catch (\Exception $e) {

            DB::table('tb_error_logs')->insert([
                'platform' => 'ONLINE_INTERNET_BANKING',
                'user_id' => 'AUTH',
                'message' => (string) $e->getMessage()
            ]);

            return $base_response->api_response('500', $e->getMessage(),  NULL); // return API BASERESPONSE


        }
    }
}