<?php

namespace App\Http\Controllers\Settings;

use App\Http\classes\WEB\ApiBaseResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChangePasswordController extends Controller
{
    //

    public function change_password(Request $request){
        $authToken = session()->get('userToken');
        $userID = session()->get('userId');

        $new_password = $request->new_password;
        $old_password = $request->old_password;
        $security_answer = $request->security_answer;

        $data = [

                "authToken"=> $authToken,
                "deviceId"=> "A",
                "newPassword"=> $new_password,
                "oldPassword"=> $old_password,
                "securityAnswer"=> $security_answer
        ];
            // return $data;

            $response = Http::post(env('API_BASE_URL')."/user/changePassword", $data);

            $result = new ApiBaseResponse();

            return $result->api_response($response);

    }
}
