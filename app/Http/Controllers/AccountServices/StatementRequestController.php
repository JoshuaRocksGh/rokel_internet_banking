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

        $accountNumber = $request->accountNumber;
        $branchCode = $request->branchCode;
        $deviceIP = $request->deviceIP;
        $entrySource = $request->entrySource;
        $pincode = $request->pinCode;
        $startDate = $request->startDate;
        $endDate = $request->endDate;
        $statementType = $request->statementType;

        $data = [

                "accountNumber" => "004001100241700194",
                "branch"=> "010",
                "deviceIP"=> "string",
                "endDate"=> "2021-04-16",
                "entrySource"=> "C",
                "pinCode"=> "1234",
                "startDate"=> "2021-04-16",
                "statementType"=> "VISA",
                "tokenID"=> "926832B4-170D-4A6D-952B-2523454FF6F2"

        ];

        return $data;
        $response = Http::post(env('API_BASE_URL') . "/request/statment", $data);

        $result = new ApiBaseResponse();

        return $result->api_response($response);
    }

}
