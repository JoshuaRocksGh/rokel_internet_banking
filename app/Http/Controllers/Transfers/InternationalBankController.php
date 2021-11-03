<?php

namespace App\Http\Controllers\Transfers;

use App\Http\classes\API\BaseResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Http\classes\WEB\ApiBaseResponse;

class InternationalBankController extends Controller
{
    //

    public function internationalBankTransfer(Request $req)
    {
        $base_response = new BaseResponse();
        $authToken = session()->get('userToken');
        $userId = session()->get('userId');
        $data = [
            "amount" => $req->transferAmount,
            "authToken" => $authToken,
            "beneBankSwift" => $req->bankCode,
            "beneficiaryAccount" => $req->beneficiaryAccountNumber,
            "beneficiaryAddress1" => $req->beneficiaryAddress,
            "beneficiaryAddress2" => "string",
            "beneficiaryAddress3" => "string",
            "beneficiaryName" => $req->beneficiaryName,
            "brand" => "string",
            "channel" => "MOB",
            "chargeAccount" => $req->accountNumber,
            "country" => $req->bankCountryCode,
            "debitAccount" => $req->accountNumber,
            "deviceId" => "string",
            "deviceIp" => "string",
            "deviceName" => "string",
            "entrySource" => "MOB",
            "expenseType" => $req->transferCategory,
            "isoCode" => "USD",
            "manufacturer" => "string",
            "pinCode" => $req->secPin,
            "remitInfo1" => $req->transferPurpose,
            "remitInfo2" => "string",
            "remitInfo3" => "string",
            "remittanceCode" => "IPI",
            "userName" => $userId
        ];
        // return $data;


        try {
            $response = Http::post(env('API_BASE_URL') . "/transfers/swiftTransfer", $data);

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
