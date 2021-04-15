<?php

namespace App\Http\Controllers\AccountEnquiry;

use App\Http\classes\API\BaseResponse;
use App\Http\classes\WEB\ApiBaseResponse;
use App\Http\classes\WEB\UserAuth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class GetAccountDescription extends Controller
{


    public function getAccounts(Request $request){

        $validator = Validator::make($request->all(),[
            'accountNumber' => 'required' ,
        ]);
        $base_response = new BaseResponse();

        // VALIDATION
        if ($validator->fails()) {
            return $base_response->api_response('500', $validator->errors(), NULL);
        };

        $account_no = $request->accountNumber;

        $authToken = session()->get('userToken');
        $userID = session()->get('userId');

        $data = [
            "authToken" => $authToken,
            "userId"    => $userID
        ];


        $response = Http::post(env('API_BASE_URL') ."/account/getAccounts",$data);

        $result = new ApiBaseResponse();
        return $result->api_response($response);


    }




    public function get_account_description(Request $request){

        $validator = Validator::make($request->all(),[
            'accountNumber' => 'required' ,
        ]);

        $base_response = new BaseResponse();
        // VALIDATION
        if ($validator->fails()) {
            return $base_response->api_response('500', $validator->errors(), NULL);
        };

        $account_no = $request->accountNumber;

        $user = (object)  UserAuth::getDetails();
        // return $user;

        $authToken = $user->userToken;
        $userID = $user->userId;

        $base_response = new BaseResponse();

        $data = [
            "authToken" => "15D2A303-98FD-43A6-86E4-F24FC7436069",
            "accountNumber"  => $account_no
        ];

        $response = Http::post(env('API_BASE_URL') ."/account/getAccountDescription",$data);

        // return $response->body();

        $result = new ApiBaseResponse();
        return $result->api_response($response);
    }

}
