<?php

namespace App\Http\Controllers\Transfers;

use App\Http\classes\API\BaseResponse;
use App\Http\classes\WEB\ApiBaseResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class SameBankController extends Controller
{
    //

    public function same_bank()
    {
        return view('pages.transfer.same_bank_');
    }


    public function transfer_to_beneficiary(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'from_account' => 'required',
            'to_account' => 'required',
            'amount' => 'required',
            'category' => 'required',
            'account_currency' => 'required',
            'purpose' => 'required',
            'alias_name' => 'required',
            // 'type' => 'required',
            'amount' => 'required',
            'secPin' => 'required',
            'category' => 'required',
            "account_currency" => 'required'

        ]);

        // return $req ;

        // return [
        //     'responseCode' => '000',
        //     'message' => 'Money transferred successfully',
        //     'data' => null
        // ];


        $base_response = new BaseResponse();

        // VALIDATION
        if ($validator->fails()) {

            return $base_response->api_response('500', $validator->errors(), NULL);
        };
        // return $req;





        $user_pin = $req->secPin;

        // return $user_pin;
        // if ($user_pin != '123456') {

        //     return $base_response->api_response('098', 'Incorrect Pin',  null); // return API BASERESPONSE

        // }

        $authToken = session()->get('userToken');
        $userID = session()->get('userId');


        $data = [

            // "amount" => (float) $req->amount,
            // "authToken" => $authToken,
            // "creditAccount" => $req->to_account,
            // "debitAccount" => $req->from_account,
            // "deviceIp" => null,
            // "entrySource" => null,
            // "narration" => $req->purpose,

            // "secPin" => $user_pin,
            // "userName" => null,
            // "category" => $req->category,
            // "posted_by" => $userID
            // "beneficiaryEmail" => $req->beneficiary_email

            "amount" => (float) $req->amount,
            "authToken" => $authToken,
            "creditAccount" => $req->to_account,
            "channel" => "MOB",
            "currency" => $req->account_currency,
            "debitAccount" => $req->from_account,
            "deviceIp" => null,
            "entrySource" => null,
            "narration" => $req->purpose,
            "secPin" => $user_pin,
            "userName" => $userID,
            "category" => $req->category,
            "beneficiaryEmail" => $req->beneficiary_email
        ];


        // return $data ;
        // if ($req->type == 'onetime') {
        //     $data['alias_name'] = $req->alias_name;
        // }


        // if (isset($req->select_frequency)) {
        //     $frequency = explode('~', $req->select_frequency);
        //     return $frequency;
        //     $selected_frequency_code = $frequency[0];
        //     $data['schedulePaymentDate'] = $req->schedule_payment_date;
        //     $data['selectFrequency'] = $selected_frequency_code;
        // }

        //return $data ;
        // if($schedule_paymen == "Y")
        // {
        //     $data['schedule_date'] = '03-23-20021';
        // }


        // $from_account = $req->from_account;


        try {

            $response = Http::post(env('API_BASE_URL') . "transfers/sameBank", $data);

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

    public function corporate_same_bank(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'from_account' => 'required',
            'to_account' => 'required',
            'amount' => 'required',
            'category' => 'required',
            'account_currency' => 'required',
            'purpose' => 'required',
            'alias_name' => 'required',
            // 'type' => 'required',
            'amount' => 'required',
            // 'secPin' => 'required',
            'category' => 'required',

        ]);

        // return $request;


        $base_response = new BaseResponse();

        // VALIDATION
        if ($validator->fails()) {

            return $base_response->api_response('500', $validator->errors(), NULL);
        };

        $authToken = session()->get('userToken');
        $userID = session()->get('userId');
        $userAlias = session()->get('userAlias');
        $customerPhone = session()->get('customerPhone');
        $customerNumber = session()->get('customerNumber');

        $data = [
            "account_no" => $request->from_account,
            "destinationAccountId" => $request->to_account,
            "currency" => $request->account_currency,
            "account_mandate" => null,
            "amount" => $request->amount,
            "narration" => $request->purpose,
            "postBy" => $userID,
            // "appBy" => '';
            "customerTel" => $customerPhone,
            "transBy" => $userAlias,
            "customer_no" => $customerNumber,
            "user_alias" => $userAlias,
            "documentRef" => strtoupper(substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 2) . time()),
        ];

        // return $data;

        // dd(env('APPROVAL_API') . "same-bank-gone-for-pending");

        try {

            // dd((env('API_BASE_PENDING_URL') . "own-account-gone-for-pending"));

            $response = Http::post(env('APPROVAL_API') . "same-bank-gone-for-pending", $data);

            $result = new ApiBaseResponse();
            return $result->api_response($response);
            // return json_decode($response->body();

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