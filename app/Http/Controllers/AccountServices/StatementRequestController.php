<?php

namespace App\Http\Controllers\AccountServices;

use App\Http\classes\API\BaseResponse;
use App\Http\classes\WEB\ApiBaseResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StatementRequestController extends Controller
{
    //method to check the statement request for the method
    public function statement_request(Request $request)
    {

        $authToken = session()->get('userToken');
        $userID = session()->get('userAlias');
        $customerNumber = session()->get('customerNumber');
        // return $authToken;

        // $base_response = new BaseResponse();
        $deviceIp = request()->ip();

        $accountNumber = $request->account_no;
        $branchCode = $request->pick_up_branch;
        $deviceIP = $request->deviceIP;
        $entrySource = $request->entrySource;
        $pincode = $request->pin;
        $startDate = $request->transStartDate;
        $endDate = $request->transEndDate;
        $statementType = $request->type_of_statement;
        $medium = $request->medium;

        $data = [

            "accountNumber" => $accountNumber,
            // "medium" => $medium,
            "branch" => $branchCode,
            "deviceIP" => $deviceIp,
            "endDate" => $endDate,
            "entrySource" => "I",
            "pinCode" => $pincode,
            "startDate" => $startDate,
            "statementType" => $statementType,
            "tokenID" => $authToken,
            // "userID" => $userID,
            // "customer_num" => $customerNumber

        ];

        // return $data;
        $response = Http::post(env('API_BASE_URL') . "/request/statment", $data);

        $result = new ApiBaseResponse();

        return $result->api_response($response);
    }
}