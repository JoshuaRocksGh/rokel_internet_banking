<?php

namespace App\Http\Controllers\Payments;

use App\Http\classes\WEB\ApiBaseResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KorporController extends Controller
{
    //
    public function initiate_korpor(Request $request)
    {

        $amount =$request->amount;
        $debitAccount =$request->debit_account;
        // $deviceIP =$request->deviceIP;
        // $fee =$request->fee;
        $pinCode =$request->pin_code;
        $receiverAddress =$request->receiver_address;
        $receiverName = $request->receiver_name;
        $receiverPhone = $request->receiver_phone;
        $senderName = session()->get('userAlias');
        // return $senderName;die;
        $tokenID = $request->tokenID;
        // $senderName = $request->senderName;
        $ip_address = $_SERVER['REMOTE_ADDR'];


        $authToken = session()->get('userToken');
        // $userID = session()->get('userId');

        $data = [
            "amount" => $amount,
            "debitAccount" => $debitAccount,
            "deviceIP" => $ip_address,
            "fee" => "0",
            "pinCode" => $pinCode,
            "receiverAddress" => $receiverAddress,
            "receiverName" => $receiverName,
            "receiverPhone" => $receiverPhone,
            "senderName" => $senderName,
            "tokenID" => $authToken
        ];

        $response = Http::post(env('API_BASE_URL') . "payment/korpor", $data);

        $result = new ApiBaseResponse();
        return $result->api_response($response);
    }
}
