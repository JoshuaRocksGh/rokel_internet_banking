<?php

namespace App\Http\Controllers\Loan;

use App\Http\Controllers\Controller;
use App\Http\classes\WEB\ApiBaseResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class LoanQuotationController extends Controller
{
    //
    public function send_loan_request_quote(Request $request)
    {

        $authToken = session()->get('userToken');
        $userID = session()->get('userId');
        // return $authToken;

        // $base_response = new BaseResponse();

        $loanProduct = $request->loanProductCode;
        $loanAmount = $request->loanAmount;
        // $entrySource = $request->entrySource;
        $tenureInMonths = $request->tenureInMonths;
        $interestRateType = $request->interestRateTypeCode;
        $principalRepayFreq = $request->principalRepayFreqCode;
        $interestRepayFrequency = $request->interestRepayFreqCode;
        $data = [

            "amount" => $loanAmount,
            "authToken" => $authToken,
            "deviceIp" => "A",
            "entrySource" => "I",
            "interestRepayFrequency" => $interestRepayFrequency,
            "interestType" => $interestRateType,
            "loanProduct" => $loanProduct,
            "principalRepayFrequency" => $principalRepayFreq,
            "tenure" => $tenureInMonths

        ];
        Log::critical($data);
        Log::critical($userID);

        //for debugging purposes
        // return $data;
        $response = Http::post(env('API_BASE_URL') . "/loans/loanQuotation", $data);
        // return $response;die();
        $result = new ApiBaseResponse();

        return $result->api_response($response);
    }
}
