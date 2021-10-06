<?php

namespace App\Http\Controllers\Transfers;

use App\Http\classes\API\BaseResponse;
use App\Http\classes\WEB\ApiBaseResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class SameBankController extends Controller
{
    //

    public function same_bank()
    {
        return view('pages.transfer.same_bank_');
    }


    public function transfer_to_beneficiary(Request $req)
    {


        $base_response = new BaseResponse();
        $authToken = session()->get('userToken');
        $userID = session()->get('userId');
        $client_ip = request()->ip();


        $data = [
            "amount" => (float) $req->amount,
            "authToken" => $authToken,
            "brand" => "string",
            "creditAccount" => $req->beneficiaryAccount,
            "channel" => "MOB",
            "country" => "SL",
            "currency" => $req->currency,
            "debitAccount" => $req->fromAccount,
            "deviceId" => "string",
            "deviceName" => "string",
            "deviceIp" => $client_ip,
            "entrySource" => 'MOB',
            "expenseType" => $req->category,
            "manufacturer" => "string",
            "narration" => $req->purpose,
            "secPin" => $req->secPin,
            "userName" => $userID,
            "beneficiaryEmail" => $req->beneficiaryEmail
        ];
        try {

            $response = Http::post(env('API_BASE_URL') . "transfers/sameBank", $data);
            $result = new ApiBaseResponse();
            Log::alert($response);
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
