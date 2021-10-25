<?php

namespace App\Http\Controllers\Transfers;

use App\Http\classes\API\BaseResponse;
use App\Http\classes\WEB\ApiBaseResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class LocalBankController extends Controller
{

    public function local_bank()
    {
        return view('pages.transfer.local_bank');
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
            $response = Http::post(env('API_BASE_URL') . "transfers/$url", $data);
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
        $base_response = new BaseResponse();
        $beneficiary_type = $request->beneficiary_type;
        $bank_name = $request->bank_name;
        $explode_bank_name = explode('||', $bank_name);
        $bankName = $explode_bank_name[0];
        $this_bank = trim($bankName);
        $client_ip = request()->ip();
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
            "narration" => $request->purpose,
            "expense_type" => $request->category,
        ];
        try {
            $response = Http::post(env('CIB_API_BASE_URL') . $url_endpoint, $data);
            $result = new ApiBaseResponse();
            return $result->api_response($response);
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
