<?php

namespace App\Http\Controllers\API\Transfer;

use App\Http\classes\API\BaseResponse;
use App\Http\classes\WEB\ApiBaseResponse;
use App\Http\classes\WEB\UserAuth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class LocalBankController extends Controller
{
    //
    public function transfer_to_other_bank_beneficiary_api(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'from_account' => 'required',
            'to_account' => 'required',
            'bankName' => 'required',
            'amount' => 'required',
            'category' => 'required',
            'currency' => 'required',
            'bank_name' => 'required',
            'secPin' => 'required',
            'beneficiaryName' => 'required',
            'naration' => 'required'
        ]);


        $base_response = new BaseResponse();

        // VALIDATION
        if ($validator->fails()) {

            return $base_response->api_response('500', $validator->errors(), NULL);
        };
        // return $req;



        $user_pin = $req->secPin;

        //return $user_pin;
        // if($user_pin != '123456'){

        //     return $base_response->api_response('999', 'Incorrect Pin',  null); // return API BASERESPONSE

        // }


        $authToken = session()->get('userToken');
        $userID = session()->get('userId');

        $data = [

            "amount" => (float) $req->amount,
            "authToken" => $authToken,
            "bankName" => $req->bank_name,
            "beneficiaryAddress" => "string",
            "beneficiaryName" => $req->beneficiaryName,
            "creditAccount" => $req->to_account,
            "debitAccount" => $req->from_account,
            "deviceIp" => "string",
            "secPin" => $user_pin,
            "transactionDetails" => $req->naration,
            "transactionId" => "string",
            "transferCurrency" => $req->currency,
            "payment_date" => $req->payment_date

        ];

        // return $data ;
        // $response = [
        //     'responseCode' => '000'
        // ];

        // return $response;



        try {

            $response = Http::post(env('API_BASE_URL') . "transfers/otherBank", $data);

            // return $response;

            $result = new ApiBaseResponse();
            return $result->api_response($response);
        } catch (\Exception $e) {

            DB::table('tb_error_logs')->insert([
                'platform' => 'ONLINE_INTERNET_BANKING',
                'user_id' => 'AUTH',
                'message' => (string) $e->getMessage()
            ]);

            return $base_response->api_response('500', "Internal Server Error",  NULL); // return API BASERESPONSE


        }
    }

    public function transfer_to_other_bank_onetime_beneficiary_api(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'from_account' => 'required',
            'beneficiary_name' => 'required',
            'to_account' => 'required',
            'bankName' => 'required',
            'account_currency' => 'required',
            // 'beneficiary_email' => 'required' ,
            'beneficiary_phone' => 'required',
            'amount' => 'required',
            'category' => 'required',
            'naration' => 'required',
            'secPin' => 'required',
            'naration' => 'required'

        ]);


        $base_response = new BaseResponse();

        // VALIDATION
        if ($validator->fails()) {

            return $base_response->api_response('500', $validator->errors(), NULL);
        };
        //return $req;


        $user_pin = $req->secPin;

        //return $user_pin;
        // if ($user_pin != '123456') {

        //     return $base_response->api_response('999', 'Incorrect Pin',  null); // return API BASERESPONSE

        // }


        $authToken = session()->get('userToken');
        $userID = session()->get('userId');

        $data = [

            "amount" => (float) $req->amount,
            "authToken" => $authToken,
            "bankName" => $req->bankName,
            "beneficiaryAddress" => "string",
            "beneficiaryName" => $req->alias_name,
            "creditAccount" => $req->to_account,
            "debitAccount" => $req->from_account_,
            "deviceIp" => "string",
            "secPin" => $user_pin,
            "transactionDetails" => "string",
            "transactionId" => "string",
            "transferCurrency" => $req->currency_,
            "payment_date" => $req->payment_date



        ];
        // return $data ;


        try {

            $response = Http::post(env('API_BASE_URL') . "transfers/otherBank", $data);

            // return $response;

            $result = new ApiBaseResponse();
            return $result->api_response($response);
        } catch (\Exception $e) {

            DB::table('tb_error_logs')->insert([
                'platform' => 'ONLINE_INTERNET_BANKING',
                'user_id' => 'AUTH',
                'message' => (string) $e->getMessage()
            ]);

            return $base_response->api_response('500', "Internal Server Error",  NULL); // return API BASERESPONSE


        }
    }

    public function localBankTransfer(Request $request)
    {


        $base_response = new BaseResponse();

        // VALIDATION
        // return $request ;

        $authToken = session()->get('userToken');
        $userID = session()->get('userId');



        $clientIp = request()->ip();
        $mode = $request->mode;
        if ($mode == "ACH") {
            $url = 'achBankTransfer';
        } else if ($mode == "RTGS") {
            $url = 'rtgsBankTransfer';
        } else {
            return $base_response->api_response('500', "Invalid Transaction Type",  NULL); // return API BASERESPONSE
        }

        $data = [
            "amount" => (float)$request->amount,
            "authToken" => $authToken,
            "bankName" => $request->bankName,
            "beneficiaryAddress" => $request->beneficiaryAddress,
            "beneficiaryName" => $request->beneficiaryName,
            "brand" => "a",
            "channel" => "a",
            "country" => "a",
            "creditAccount" => $request->toAccount,
            "debitAccount" => $request->fromAccount,
            "deviceId" => "a",
            "deviceIp" => $clientIp,
            "deviceName" => "a",
            "entrySource" => 'MOB',
            "expenseType" => $request->category,
            "manufacturer" => "a",
            "secPin" => $request->secPin,
            "transactionDetails" => $request->purpose,
            "transferCurrency" => $request->currency,
            "userName" => $userID,
            "email" => $request->beneficiaryEmail,

        ];
        return $data;
        try {

            Log::alert($mode);
            Log::alert($data);
            // return $data;
            $response = Http::post(env('API_BASE_URL') . "transfers/$url", $data);

            // return $response;

            $result = new ApiBaseResponse();
            return $result->api_response($response);
        } catch (\Exception $e) {

            DB::table('tb_error_logs')->insert([
                'platform' => 'ONLINE_INTERNET_BANKING',
                'user_id' => 'AUTH',
                'message' => (string) $e->getMessage()
            ]);

            return $base_response->api_response('500', "Internal Server Error",  NULL); // return API BASERESPONSE


        }
    }
}
