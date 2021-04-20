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
    public function statement_request(Request $request){

        $authToken = session()->get('userToken');
        $userID = session()->get('userId');
        // return $authToken;

        // $base_response = new BaseResponse();

        $accountNumber = $request->account_no;
        $branchCode = $request->pick_up_branch;
        $deviceIP = $request->deviceIP;
        $entrySource = $request->entrySource;
        $pincode = $request->pin;
        $startDate = $request->transStartDate;
        $endDate = $request->transEndDate;
        $statementType = $request->type_of_statement;

        $data = [

                "accountNumber" => $accountNumber,
                "branch"=> $branchCode,
                "deviceIP"=> "A",
                "endDate"=> $endDate,
                "entrySource"=> "C",
                "pinCode"=> $pincode,
                "startDate"=> $startDate,
                "statementType"=> $statementType,
                "tokenID"=> $authToken

        ];

        // return $data;
        $response = Http::post(env('API_BASE_URL') . "/request/statment", $data);

        $result = new ApiBaseResponse();

        return $result->api_response($response);
    }

}
