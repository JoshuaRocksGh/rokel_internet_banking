<?php

namespace App\Http\Controllers\Payments;

use App\Http\classes\API\BaseResponse;
use App\Http\classes\WEB\ApiBaseResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class CardlessController extends Controller
{

    public function initiate_cardless(Request $request)
    {

        $validator = Validator::make($request->all(), [

            'amount' => 'required',
            'debit_account' => 'required',
            'pin_code' => 'required',
            'receiver_address' => 'required',
            'receiver_name' => 'required',
            'receiver_phone' => 'required',
            'sender_name' => 'required'
        ]);

        // return $request;

        $base_response = new BaseResponse();

        // VALIDATION
        if ($validator->fails()) {

            return $base_response->api_response('500', $validator->errors(), NULL);
        };
        // return $req;

        $authToken = session()->get('userToken');
        $userID = session()->get('userId');

        $amount = $request->amount;
        $debitAccount = $request->debit_account;
        $pinCode = $request->pin_code;
        $receiverAddress = $request->receiver_address;
        $receiverName = $request->receiver_name;
        $receiverPhone = $request->receiver_phone;
        $senderName = $request->sender_name;
        // $deviceIP = $_SERVER['REMOTE_ADDR'];
        $fee = $request->fee;


        // return $deviceIP ;
        $user_ip_address =$request->ip();

        // return $user_ip_address ;

        $data = [
                // "amount"=>$amount,
                // "debitAccount"=>"004001100241700194",
                // "deviceIP"=> "A",
                // "fee"=> "",
                // "pinCode"=> "1234",
                // "receiverAddress"=> "P.0 BOX 259 AD",
                // "receiverName"=> "Josh",
                // "receiverPhone"=> "0549380507",
                // "senderName"=>"ATO",
                // "tokenID"=>"CA00BAB3-CCCD-4025-BEAC-8CE5853938A1"
                "amount"=> $amount,
                "debitAccount"=> $debitAccount,
                "deviceIP"=> $user_ip_address,
                "fee"=> '0',
                "pinCode"=> $pinCode,
                "receiverAddress"=> $receiverAddress,
                "receiverName"=> $receiverName,
                "receiverPhone"=> $receiverPhone,
                "senderName"=> $senderName,
                "tokenID"=> $authToken

            ];

            // return $data;





        try {

            $response = Http::post(env('API_BASE_URL') . "payment/cardless", $data);

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
