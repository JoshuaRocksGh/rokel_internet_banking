<?php

namespace App\Http\Controllers\AccountServices;

use App\Http\classes\API\BaseResponse;
use App\Http\classes\WEB\ApiBaseResponse;
use App\Http\classes\WEB\UserAuth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

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
}