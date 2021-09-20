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

    public function display_standing_order_new()
    {
        return view('pages.transfer.standing_order_new');
    }

    //method to send pay load request
    public function standing_order_request(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'fromAccount' =>  'required',
            'amount' => 'required',
            'toAccount' => 'required',
            'startDate' => 'required',
            'endDate' => 'required',
            'frequency' => 'required',
            'purpose' => 'required',
            'bankCode' => 'required',
            'secPin' => 'required'
        ]);

        // return $request;
        $base_response = new BaseResponse();

        // VALIDATION
        if ($validator->fails()) {

            return $base_response->api_response('500', $validator->errors(), NULL);
        };


        $authToken = session()->get('userToken');
        $api_headers = session()->get('headers');
        $terminalId = get_current_user();


        $data =
            [
                "amount" => $req->account,
                "authToken" => $authToken,
                "bankCode" => $req->backCode,
                "creditAccount" => $req->toAccount,
                "debitAccount" => $req->fromAccount,
                "deviceIp" => $terminalId,
                "effectiveDate" => $req->startDate,
                "expiryDate" => $req->endDate,
                "frequency" => $req->frequency,
                "pinCode" => $req->secPin,
                "transactionDesc" => $req->purpose
            ];

        // return $data;

        // Log::critical($data);

        try {
            $response = Http::withHeaders($api_headers)->post(env('API_BASE_URL') . "transfers/standingOrder", $data);
            // return $response;
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


    public function corporate_standing_order_request(Request $req)
    {

        $validator = Validator::make($req->all(), [
            'fromAccount' =>  'required',
            'amount' => 'required',
            'toAccount' => 'required',
            'startDate' => 'required',
            'endDate' => 'required',
            'frequency' => 'required',
            'purpose' => 'required',
            'bankCode' => 'required',
            'mandate' => 'required'
            // 'secPin' => 'required'
        ]);

        $base_response = new BaseResponse();

        // VALIDATION
        if ($validator->fails()) {

            return $base_response->api_response('500', $validator->errors(), NULL);
        };

        // return $req;


        $authToken = session()->get('userToken');
        $api_headers = session()->get('headers');
        $terminalId = get_current_user();
        $userID = session()->get('userId');
        $userAlias = session()->get('userAlias');
        $customerPhone = session()->get('customerPhone');
        $customerNumber = session()->get('customerNumber');
        $userMandate = session()->get('userMandate');


        $data =
            [
                "amount" => $req->amount,
                "authToken" => $authToken,
                // "bankCode" => $req->backCode,
                "destinationAccountId" => $req->toAccount,
                "debitAccount" => $req->fromAccount,
                "deviceIp" => $terminalId,
                "effectiveDate" => $req->startDate,
                "expiryDate" => $req->endDate,
                "frequency" => $req->frequency,
                // "pinCode" => $req->secPin,
                "narration" => $req->purpose,
                "channel" => 'NET',
                "currency" => $req->currency,
                "account_mandate" => $req->mandate,
                "postBy" => $userID,
                "customerTel" => $customerPhone,
                "transBy" => $userAlias,
                "customer_no" => $customerNumber,
                "user_alias" => $userAlias,
                "user_mandate" => $userMandate,
                "documentRef" => strtoupper(substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 2) . time()),
            ];

        // return $data;

        // Log::critical($data);

        try {
            $response = Http::post(env('CIB_API_BASE_URL') . "standing-order-gone-for-pending", $data);
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
