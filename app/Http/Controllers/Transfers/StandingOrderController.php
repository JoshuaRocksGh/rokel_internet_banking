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

class StandingOrderController extends Controller
{
    //method to display the standing order page
    public function display_standing_order()
    {
        return view('pages.transfer.standing_order');
    }

    //method to send pay load request
    public function standing_order_request(Request $req)
    {
        // return $request;
        $base_response = new BaseResponse();

        $authToken = session()->get('userToken');
        $api_headers = session()->get('headers');
        $clientIp = request()->ip();


        $data =
            [
                "amount" => $req->amount,
                "authToken" => $authToken,
                "bankCode" => $req->bankCode,
                "creditAccount" => $req->toAccount,
                "debitAccount" => $req->fromAccount,
                "deviceIp" => $clientIp,
                "effectiveDate" => $req->startDate,
                "expiryDate" => $req->endDate,
                "frequency" => $req->frequency,
                "pinCode" => $req->secPin,
                "transactionDesc" => $req->purpose
            ];

        Log::alert($data);

        try {
            $response = Http::withHeaders($api_headers)->post(env('API_BASE_URL') . "transfers/standingOrder", $data);
            // return $response;
            Log::alert("message");
            Log::alert($response);
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
