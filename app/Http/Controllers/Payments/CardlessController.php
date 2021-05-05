<?php

namespace App\Http\Controllers\Payments;

use App\Http\classes\WEB\ApiBaseResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CardlessController extends Controller
{

    public function initiate_cardless(Request $request)
    {
        // return $request;
        $authToken = session()->get('userToken');
        $userID = session()->get('userId');

        $amount =$request->amount;
        $debitAccount =$request->debit_account;
        $pinCode =$request->user_pin;
        $receiverAddress =$request->receiver_address;
        $receiverName =$request->receiver_name;
        $receiverPhone = $request->receiver_phone;
        $senderName = $request->sender_name;
        $deviceIP =$request->deviceIP;
        $fee =$request->fee;

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
                "amount"=>$amount,
                "debitAccount"=>$debitAccount,
                "deviceIP"=> "A",
                "fee"=> "",
                "pinCode"=> $pinCode,
                "receiverAddress"=> $receiverAddress,
                "receiverName"=> $receiverName,
                "receiverPhone"=> $receiverPhone,
                "senderName"=>$senderName,
                "tokenID"=>$authToken

            ];
        // return $data;

        $response = Http::post(env('API_BASE_URL') . "payment/cardless", $data);
        $result = new ApiBaseResponse();
        return $result->api_response($response);
    }
}
