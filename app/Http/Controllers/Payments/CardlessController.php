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

        // $amount =$request->amount;
        // $debitAccount =$request->debitAccount;
        // $deviceIP =$request->deviceIP;
        // $fee =$request->fee;
        // $pinCode =$request->pinCode;
        // $receiverAddress =$request->receiverAddress;
        // $receiverPhone = $request->receiverPhone;
        // $senderName = $request->senderName;
        // $tokenID = $request->tokenID;
        // $senderName = $request->senderName;
        // $senderName = $request->senderName;

        $authToken = session()->get('userToken');
        $userID = session()->get('userId');

        $data = [
            "amount" => '10.0',
            "debitAccount" => '23456786543',
            "deviceIP" => 'ftrt',
            "fee" => 'authToken',
            "pinCode" => 'authToken',
            "receiverAddress" => 'authToken',
            "receiverName" => 'authToken',
            "receiverPhone" => 'authToken',
            "senderName" => 'authToken',
            "tokenID" => 'authToken'
        ];

        $response = Http::post(env('API_BASE_URL') . "payment/cardless", $data);

        $result = new ApiBaseResponse();
        return $result->api_response($response);
    }
}