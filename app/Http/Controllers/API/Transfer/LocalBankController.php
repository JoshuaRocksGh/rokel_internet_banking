<?php

namespace App\Http\Controllers\API\Transfer;

use App\Http\classes\API\BaseResponse;
use App\Http\classes\WEB\ApiBaseResponse;
use App\Http\classes\WEB\UserAuth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
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

    public function saved_beneficiary_transfer(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "from_account"  => "required",
            "to_account"  => "required",
            "bank_name"  => "required",
            "beneficiary_name"  => "required",
            "beneficiary_address"  => "required",
            "amount"  => "required",
            "currency"  => "required",
            "category"  => "required",
            "purpose"  => "required",
            "sec_pin"  => "required",
            "beneficiary_type"  => "required"
        ]);

        $base_response = new BaseResponse();

        // VALIDATION
        if ($validator->fails()) {

            return $base_response->api_response('500', $validator->errors(), NULL);
        };
        // return $request;

        // return $request ;

        $authToken = session()->get('userToken');
        $userID = session()->get('userId');

        $beneficiary_type = $request->beneficiary_type;

        $bank_name = $request->bank_name;
        $explode_bank_name = explode('||', $bank_name);
        // return $explode_bank_name;

        $bankName = $explode_bank_name[0];
        $this_bank = trim($bankName);

        // return $beneficiary_type ;

        $client_ip = request()->ip();
        // dd( $client_ip);


        if ($beneficiary_type == "ACH") {
            $url_endpoint = 'achBankTransfer';
        } else if ($beneficiary_type == "RTGS") {
            $url_endpoint = 'rtgsBankTransfer';
        } else if ($beneficiary_type == "INSTANT") {
            $url_endpoint = 'instantBankTransfer';
        } else {
            $url_endpoint = '';
        }



        $data = [
            "amount" => (float)$request->amount,
            "authToken" => $authToken,
            "bankName" => $this_bank,
            "beneficiaryAddress" => $request->beneficiary_address,
            "beneficiaryName" => $request->beneficiary_name,
            "creditAccount" => $request->to_account,
            "debitAccount" => $request->from_account,
            "deviceIp" => $client_ip,
            "entrySource" => "I",
            "channel" => "MOB",
            "secPin" => $request->sec_pin,
            "transactionDetails" => $request->purpose,
            // "transactionId" => null,
            "transferCurrency" => $request->currency,
            // "futurePayments" => $request->future_payement,
            // "category" => $request->category
        ];


        // return $data;
        try {

            $response = Http::post(env('API_BASE_URL') . "transfers/$url_endpoint", $data);

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



    public function onetime_beneficiary_transfer(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "from_account" => "required",
            "beneficiary_type" => "required",
            "beneficiary_name" => "required",
            "bank_name" => "required",
            "to_account" => "required",
            "currency" => "required",
            "amount" => "required",
            "email" => "required",
            "category" => "required",
            "purpose" => "required",
            "sec_pin" => "required"
        ]);

        $base_response = new BaseResponse();

        // VALIDATION
        if ($validator->fails()) {

            return $base_response->api_response('500', $validator->errors(), NULL);
        };
        // return $request;

        // return $request ;

        $authToken = session()->get('userToken');
        $userID = session()->get('userId');

        $beneficiary_type = $request->beneficiary_type;

        // return $beneficiary_type ;

        $client_ip = request()->ip();

        if ($beneficiary_type == "ACH") {
            $url_endpoint = 'achBankTransfer';
        } else if ($beneficiary_type == "RTGS") {
            $url_endpoint = 'rtgsBankTransfer';
        } else if ($beneficiary_type == "INSTANT") {
            $url_endpoint = 'instantBankTransfer';
        } else {
            $url_endpoint = '';
        }

        $data = [
            "amount" => (float)$request->amount,
            "authToken" => $authToken,
            "bankName" => $request->bank_name,
            "beneficiaryAddress" => null,
            "beneficiaryName" => $request->beneficiary_name,
            "creditAccount" => $request->to_account,
            "debitAccount" => $request->from_account,
            "deviceIp" => $client_ip,
            "secPin" => $request->sec_pin,
            "transactionDetails" => $request->purpose,
            "transactionId" => null,
            "transferCurrency" => $request->currency,
            "futurePayments" => null,
            "category" => $request->category,
            "channel" => 'MOB',
            "email" => $request->email,
        ];

        try {

            $response = Http::post(env('API_BASE_URL') . "transfers/$url_endpoint", $data);

            return $response;

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

    public function corporate_saved_beneficiary(Request $request)
    {

        $validator = Validator::make($request->all(), [
            "from_account" => 'required',
            "bank_name" => 'required',
            "beneficiary_name" => 'required',
            "beneficiary_address" => 'required',
            "to_account" => 'required',
            "amount" => 'required',
            "currency" => 'required',
            "currency_iso" => 'required',
            "category" => 'required',
            "purpose" => 'required',
            // "future_payement" => 'required',
            "beneficiary_type" => 'required',
            "account_mandate" => 'required'
        ]);


        $base_response = new BaseResponse();

        // VALIDATION
        if ($validator->fails()) {

            return $base_response->api_response('500', $validator->errors(), NULL);
        };
        // return $request;

        // return $request;


        $beneficiary_type = $request->beneficiary_type;

        $bank_name = $request->bank_name;
        $explode_bank_name = explode('||', $bank_name);

        $bankName = $explode_bank_name[0];
        $this_bank = trim($bankName);
        /*
        $explode_bank_name = explode('||', $bank_name);
        $bankName = $explode_bank_name[0];
        $bankCode = $explode_bank_name[1];
        */

        // return $beneficiary_type ;

        $client_ip = request()->ip();
        // dd( $client_ip);


        $authToken = session()->get('userToken');
        $userID = session()->get('userId');
        $userAlias = session()->get('userAlias');
        $customerPhone = session()->get('customerPhone');
        $customerNumber = session()->get('customerNumber');
        $userMandate = session()->get('userMandate');


        if ($beneficiary_type == "ACH") {
            $url_endpoint = 'ach-bank-gone-for-pending';
        } else if ($beneficiary_type == "RTGS") {
            $url_endpoint = 'rtgs-bank-gone-for-pending';
        } else if ($beneficiary_type == "INSTANT") {
            $url_endpoint = 'instantBankTransfer';
        } else {
            $url_endpoint = '';
        }

        $data = [
            "customer_no" => $customerNumber,
            "user_id" => $userID,
            "user_alias" => $userAlias,
            "account_mandate" => $request->account_mandate,
            "account_no" => $request->from_account,
            "bank_code" => null,
            "bank_name" => $this_bank,
            "bene_account" => $request->to_account,
            "bene_name" => $request->beneficiary_name,
            "bene_address" => $request->beneficiary_address,
            "bene_tel" => null,
            "amount" => $request->amount,
            "currency" => $request->currency,
            "currency_iso" => $request->currency_iso,
            "narration" => $request->purpose
        ];

        // return response()->json([
        //     'responseCode' => '$response_code',
        //     'message' => '$message',
        //     'data' => $data
        // ], 200);
        // return $base_response->api_response('200', 'TESTING',  $data);
        // return $data;

        try {

            // dd(env('CIB_API_BASE_URL') . $url_endpoint);

            $response = Http::post(env('CIB_API_BASE_URL') . $url_endpoint, $data);

            $result = new ApiBaseResponse();
            return $result->api_response($response);
            // return json_decode($response->body();

        } catch (\Exception $e) {

            DB::table('tb_error_logs')->insert([
                'platform' => 'ONLINE_INTERNET_BANKING',
                'user_id' => 'AUTH',
                'message' => (string) $e->getMessage()
            ]);

            return $base_response->api_response('500', 'SERVER ERROR',  NULL); // return API BASERESPONSE


        }
    }

    public function corporate_onetime_beneficiary(Request $request)
    {
        // return $request;

        $validator = Validator::make($request->all(), [
            "from_account" => 'required',
            "bank_name" => 'required',
            "beneficiary_name" => 'required',
            "beneficiary_address" => 'required',
            "to_account" => 'required',
            "amount" => 'required',
            "currency" => 'required',
            "currency_iso" => 'required',
            "category" => 'required',
            "purpose" => 'required',
            // "future_payement" => 'required',
            "beneficiary_type" => 'required',
            "account_mandate" => 'required'
        ]);

        $base_response = new BaseResponse();

        // VALIDATION
        if ($validator->fails()) {

            return $base_response->api_response('500', $validator->errors(), NULL);
        };
        // return $request;

        $beneficiary_type = $request->beneficiary_type;


        $client_ip = request()->ip();
        // dd( $client_ip);


        $authToken = session()->get('userToken');
        $userID = session()->get('userId');
        $userAlias = session()->get('userAlias');
        $customerPhone = session()->get('customerPhone');
        $customerNumber = session()->get('customerNumber');
        $userMandate = session()->get('userMandate');


        if ($beneficiary_type == "ACH") {
            $url_endpoint = 'ach-bank-gone-for-pending';
        } else if ($beneficiary_type == "RTGS") {
            $url_endpoint = 'rtgs-bank-gone-for-pending';
        } else if ($beneficiary_type == "INSTANT") {
            $url_endpoint = 'instantBankTransfer';
        } else {
            $url_endpoint = '';
        }


        $data = [
            "customer_no" => $customerNumber,
            "user_id" => $userID,
            "user_alias" => $userAlias,
            "account_mandate" => $request->account_mandate,
            "account_no" => $request->from_account,
            "bank_code" => null,
            "bank_name" => $request->bank_name,
            "bene_account" => $request->to_account,
            "bene_name" => $request->beneficiary_name,
            "bene_address" => $request->beneficiary_address,
            "bene_tel" => null,
            "amount" => $request->amount,
            "currency" => $request->currency,
            "currency_iso" => $request->currency_iso,
            "narration" => $request->purpose
        ];

        // return $data;


        try {

            // dd((env('CIB_API_BASE_URL') . $url_endpoint));

            $response = Http::post(env('CIB_API_BASE_URL') . $url_endpoint, $data);

            $result = new ApiBaseResponse();
            return $result->api_response($response);
            // return json_decode($response->body();

        } catch (\Exception $e) {

            DB::table('tb_error_logs')->insert([
                'platform' => 'ONLINE_INTERNET_BANKING',
                'user_id' => 'AUTH',
                'message' => (string) $e->getMessage()
            ]);

            return $base_response->api_response('500', 'SERVER ERROR',  NULL); // return API BASERESPONSE


        }
    }
}