<?php

namespace App\Http\Controllers\API\Transfer;

use App\Http\classes\API\BaseResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Http\classes\WEB\ApiBaseResponse;

class InternationalBankController extends Controller
{
    //

    public function international_bank_transfer(Request $req)
    {
        $base_response = new BaseResponse();
        $authToken = session()->get('userToken');
        $userId = session()->get('userId');
        $data = [
            "amount" => $req->amount,
            "authToken" => $authToken,
            "beneBankSwift" => $req->bankCode,
            "beneficiaryAccount" => $req->toAccount,
            "beneficiaryAddress1" => $req->beneficiaryAddress,
            "beneficiaryAddress2" => "string",
            "beneficiaryAddress3" => "string",
            "beneficiaryName" => $req->beneficiaryName,
            "brand" => "string",
            "channel" => "string",
            "chargeAccount" => $req->fromAccount,
            "country" => $req->bankCountryCode,
            "debitAccount" => $req->fromAccount,
            "deviceId" => "string",
            "deviceIp" => "string",
            "deviceName" => "string",
            "entrySource" => "MOB",
            "expenseType" => $req->category,
            "isoCode" => "string",
            "manufacturer" => "string",
            "pinCode" => $req->secPin,
            "remitInfo1" => "string",
            "remitInfo2" => "string",
            "remitInfo3" => "string",
            "remittanceCode" => "string",
            "userName" => $userId
        ];
        return $data;


        try {
            $response = Http::post(env('API_BASE_URL') . " ", $data);

            $result = new ApiBaseResponse();
            return $result->api_response($response);
        } catch (\Exception $e) {

            DB::table('tb_error_logs')->insert([
                'platform' => 'ONLINE_INTERNET_BANKING',
                'user_id' => 'AUTH',
                'message' => (string) $e->getMessage()
            ]);

            return $base_response->api_response('500', $e->getMessage(),  NULL); // return API BASERESPONSE
        }
    }
}
