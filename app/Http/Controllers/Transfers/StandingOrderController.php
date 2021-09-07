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
    public function standing_order_request(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'from_account' =>  'required',
            'amount' => 'required',
            'beneficiary_account' => 'required',
            'standing_order_start_date' => 'required',
            'standing_order_end_date' => 'required',
            'standing_order_frequency' => 'required',
            'narration' => 'required',
            'bank_code' => 'required',
            'user_pin' => 'required'
        ]);

        // return $request;


        $base_response = new BaseResponse();

        // VALIDATION
        if ($validator->fails()) {

            return $base_response->api_response('500', $validator->errors(), NULL);
        };


        $authToken = session()->get('userToken');
        // $userID = session()->get('userId');
        $api_headers = session()->get('headers');
        // $sender_name = session()->get('userAlias');
        // $ip_address =
        // return $api_headers;

        $accLink = $request->from_account;
        // $approvalTerminal = get_current_user();
        // $approvedBy = $sender_name;
        $bank_code = $request->bank_code;
        $beneficiaryAccount = $request->beneficiary_account;
        $dueAmount = $request->amount;
        $dueDate = $request->standing_order_end_date;
        $startDate = $request->standing_order_start_date;
        $frequencyCode = $request->standing_order_frequency;
        // $postedBy = $sender_name;
        $terminalId = get_current_user();
        $transactionDetails = $request->narration;
        $pin_code = $request->user_pin;

        $data =
            [
                "amount" => $dueAmount,
                "authToken" => $authToken,
                "bankCode" => $bank_code,
                "creditAccount" => $beneficiaryAccount,
                "debitAccount" => $accLink,
                "deviceIp" => $terminalId,
                "effectiveDate" => $startDate,
                "expiryDate" => $dueDate,
                "frequency" => $frequencyCode,
                "pinCode" => $pin_code,
                "transactionDesc" => $transactionDetails
            ];

        // return $data;

        // Log::critical($data);

        try {
            $response = Http::withHeaders($api_headers)->post(env('API_BASE_URL') . "transfers/standingOrder", $data);
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


    public function corporate_standing_order_request(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'from_account' =>  'required',
            'amount' => 'required',
            'beneficiary_account' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'frequency' => 'required',
            'narration' => 'required',
            'bank_code' => 'required',
            'user_pin' => 'required'
        ]);

        return $request;


        $base_response = new BaseResponse();

        // VALIDATION
        if ($validator->fails()) {

            return $base_response->api_response('500', $validator->errors(), NULL);
        };
    }
}