<?php

namespace App\Http\Controllers;

use App\Http\classes\WEB\ApiBaseResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LoanRequestController extends Controller
{
    //
    public function send_loan_request(Request $request){

        $authToken = session()->get('userToken');
        $userID = session()->get('userId');
        // return $authToken;

        // $base_response = new BaseResponse();

        $loanProduct = $request->loan_product;
        $loanAmount = $request->loan_amount;
        // $entrySource = $request->entrySource;
        $tenureInMonths = $request->tenure_in_months;
        $interestRateType = $request->interest_rate_type;
        $principalRepayFreq = $request->principal_repay_freq;
        $interestRepayFrequency = $request->interest_repay_freq;
        $data = [

                "amount"=>$loanAmount,
                "authToken"=> $authToken,
                "deviceIp"=> "A",
                "entrySource"=> "I",
                "interestRepayFrequency"=> $interestRepayFrequency,
                "interestType"=>$interestRateType,
                "loanProduct"=> $loanProduct,
                "principalRepayFrequency"=>$principalRepayFreq,
                "tenure"=>$tenureInMonths

        ];

        return $data;
        $response = Http::post(env('API_BASE_URL') . "/loans/loanQuotation", $data);

        $result = new ApiBaseResponse();

        return $result->api_response($response);
    }
}
