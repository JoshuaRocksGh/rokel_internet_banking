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

        $amount =$request->transfer_amount;
        $debitAccount =$request->from_account;
        // $deviceIP =$request->deviceIP;
        // $fee =$request->fee;
        $pinCode =$request->pinCode;
        $receiverAddress =$request->receiverAddress;
        $receiverName = $request->receiver_name;
        $receiverPhone = $request->receiverPhone;
        $senderName = $request->senderName;
        $tokenID = $request->tokenID;
        $senderName = $request->senderName;


        $authToken = session()->get('userToken');
        $userID = session()->get('userId');

        $data = [
            "amount" => $amount,
            "debitAccount" => $debitAccount,
            "deviceIP" => "A",
            "fee" => "",
            "pinCode" => $pinCode,
            "receiverAddress" => $receiverAddress,
            "receiverName" => 'authToken',
            "receiverPhone" => $receiverPhone,
            "senderName" => 'authToken',
            "tokenID" => $userID
        ];

        $response = Http::post(env('API_BASE_URL') . "payment/korpor", $data);

        $result = new ApiBaseResponse();
        return $result->api_response($response);
    }
}
