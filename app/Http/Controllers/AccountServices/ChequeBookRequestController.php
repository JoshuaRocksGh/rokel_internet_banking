<?php

namespace App\Http\Controllers\AccountServices;

use App\Http\classes\API\BaseResponse;
use App\Http\classes\WEB\ApiBaseResponse;
use App\Http\classes\WEB\UserAuth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class ChequeBookRequestController extends Controller
{
    //function or method to hit the cheque book request api
    public function cheque_book_request(Request $request)
    {


        $accountNumber = $request->accountNumber;
        $numberOfLeaves = $request->leaflet;
        $branchCode = $request->branchCode;
        $pinCode = $request->pinCode;


        $authToken = session()->get('userToken');
        $userID = session()->get('userId');


        $data = [

            "accountNumber" => $accountNumber,
            "branch" => $branchCode,
            "deviceIP" => "A",
            "numberOfLeaves" => $numberOfLeaves,
            "pinCode" => $pinCode,
            "tokenID" => $authToken

        ];

        // return $data;

        $response = Http::post(env('API_BASE_URL') . "/request/chequeBook", $data);
        // return $response;
        $result = new ApiBaseResponse();
        return $result->api_response($response);
    }

    public function corporate_cheque_book_request(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'accountNumber' => 'required',
            'branchCode' => 'required',
            'leaflet' => 'required',
        ]);


        $base_response = new BaseResponse();

        // VALIDATION
        if ($validator->fails()) {

            return $base_response->api_response('500', $validator->errors(), NULL);
        };

        // return $request;


        $userID = session()->get('userId');
        $userAlias = session()->get('userAlias');
        $customerNumber = session()->get('customerNumber');
        $userMandate = session()->get('userMandate');
        $userAlias = session()->get('userAlias');
        $accountNumber = $request->accountNumber;
        $branchCode = $request->branchCode;
        $numberOfLeaves = $request->numberOfLeaves;
        $deviceIP = $request->ip();


        $data = [

            "user_id" => $userID,
            "user_name" => $userAlias,
            "customer_no" => $customerNumber,
            "account_mandate" => $userMandate,
            // "user_id" = $userID,
            "accountNumber" => $accountNumber,
            "branch" => $branchCode,
            "deviceIP" => $deviceIP,
            "numberOfLeaves" => $numberOfLeaves,

        ];


    }
}
