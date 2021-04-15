<?php

namespace App\Http\Controllers\AccountServices;

use App\Http\classes\API\BaseResponse;
use App\Http\classes\WEB\ApiBaseResponse;
use App\Http\classes\WEB\UserAuth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class ChequeBookRequestController extends Controller
{
    //function or method to hit the cheque book request api
    public function cheque_book_request(){

        $authToken = session()->get('userToken');
        $userID = session()->get('userId');

        $data = [

                "accountNumber"=> "004001100241700194",
                "branch" => "string",
                "deviceIP" => "string",
                "numberOfLeaves" => 25,
                "pinCode" =>"1234",
                "tokenID" => "5CF53285-3558-4129-9363-3D2D41E8A5D7"

        ];

        $response = Http::post(env('API_BASE_URL') ."/request/chequeBook",$data);
        // return $response;
        $result = new ApiBaseResponse();
        return $result->api_response($response);


    }
}
