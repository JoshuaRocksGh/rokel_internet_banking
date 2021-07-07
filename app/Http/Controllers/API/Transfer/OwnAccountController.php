<?php

namespace App\Http\Controllers\API\Transfer;

use App\Http\classes\API\BaseResponse;
use App\Http\classes\WEB\ApiBaseResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class OwnAccountController extends Controller
{
    //
    public function own_account_()
    {


        // return $user;

        $authToken = session()->get('userToken');
        $userID = session()->get('userId');

        $base_response = new BaseResponse();

        $data = [
            "authToken" => $authToken,
            "userId"    => $userID
        ];

        $response = Http::post(env('API_BASE_URL') . "/account/getAccounts", $data);

        $result = new ApiBaseResponse();
        return $result->api_response($response);
    }

    public function own_account_transfer(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'from_account' => 'required',
            'to_account' => 'required',
            'transfer_amount' => 'required',
            'category' => 'required',
            'purpose' => 'required',
            'secPin' => 'required'


        ]);
        // return $req ;

        $base_response = new BaseResponse();


        // VALIDATION
        if ($validator->fails()) {

            return $base_response->api_response('500', $validator->errors(), NULL);
        };

        // $response = [
        //     "responseCode" => "000",
        //     "message" => "Transfer Successful"
        // ];

        // return $response ;

        // return $req;

        // $user_pin = $req->secPin;

        // return $user_pin;
        // if($user_pin != '123456'){

        //     return $base_response->api_response('099', 'Incorrect Pin',  null); // return API BASERESPONSE

        // }

        $authToken = session()->get('userToken');
        $userID = session()->get('userId');


        // $from_account = $req->from_account;
        // 'from_account' : from_account_ ,
        // 'to_account' : to_account_ ,
        // 'transfer_amount' : transfer_amount ,
        // 'category' : category_ ,
        // 'select_frequency' : select_frequency_ ,
        // 'purpose' : purpose ,
        // 'schedule_payment_type' : schedule_payment_contraint_input ,
        // 'schedule_payment_date' : schedule_payment_date,
        // 'secPin' : pin
        $data = [

            "amount" => $req->transfer_amount,
            "authToken" => $authToken,
            "channel" => 'MOB',
            "creditAccount" => $req->to_account,
            "currency" => null,
            "debitAccount" => $req->from_account,
            "deviceIp" => null,
            "entrySource" => null,
            "narration" => $req->purpose,
            "secPin" => $req->secPin,
            "userName" => null,
            "category" => $req->category,


        ];


        if (isset($req->select_frequency)) {
            $frequency = $req->select_frequency;
            // return $frequency;
            $selected_frequency_code = $frequency;
            $data['schedulePaymentDate'] = $req->schedule_payment_date;
            $data['selectFrequency'] = $selected_frequency_code;
        }

        // return $data ;

        try {

            $response = Http::post(env('API_BASE_URL') . "transfers/sameBank", $data);

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

    public function corporate_own_account_transfer(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'from_account' => 'required',
            'to_account' => 'required',
            'transfer_amount' => 'required',
            // 'category' => 'required',
            'purpose' => 'required',
            'currency' => 'required'


        ]);
        // return $req ;

        $base_response = new BaseResponse();


        // VALIDATION
        if ($validator->fails()) {

            return $base_response->api_response('500', $validator->errors(), NULL);
        };

        // $response = [
        //     "responseCode" => "000",
        //     "message" => "Transfer Successful"
        // ];

        // return $response ;

        // return $req;

        // $user_pin = $req->secPin;

        // return $user_pin;
        // if($user_pin != '123456'){

        //     return $base_response->api_response('099', 'Incorrect Pin',  null); // return API BASERESPONSE

        // }

        $authToken = session()->get('userToken');
        $userID = session()->get('userId');
        $userAlias = session()->get('userAlias');
        $customerPhone = session()->get('customerPhone');
        $customerNumber = session()->get('customerNumber');
        $userMandate = session()->get('userMandate');


        $data = [


            "account_no" => $req->from_account ,
            "destinationAccountId" => $req->to_account,
            "amount" => $req->transfer_amount,
            "currency" => $req->currency,
            "narration" => $req->purpose,
            "postBy" => $userID,
            "account_mandate" => $req->account_mandate,
            "user_mandate" => $userMandate,
            // "appBy" => '';
            "customerTel" => $customerPhone ,
            "transBy" => $userID ,
            "user_id" => $userID ,
            "customer_no" => $customerNumber ,
            "user_alias" => $userAlias
            // $documentRef => strtoupper(substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 2) . time());

        ];


        if (isset($req->select_frequency)) {
            $frequency = $req->select_frequency;
            // return $frequency;
            $selected_frequency_code = $frequency;
            $data['schedulePaymentDate'] = $req->schedule_payment_date;
            $data['selectFrequency'] = $selected_frequency_code;
        }

        // return $data ;

        try {

            //dd((env('CIB_API_BASE_URL') . "own-account-gone-for-pending"));

            $response = Http::post(env('CIB_API_BASE_URL') . "own-account-gone-for-pending", $data);

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
