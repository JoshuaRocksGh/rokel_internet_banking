<?php

namespace App\Http\Controllers\Cheques;

use App\Http\classes\API\BaseResponse;
use App\Http\classes\WEB\ApiBaseResponse;
use App\Http\classes\WEB\UserAuth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class ChequeBookRequestController extends Controller
{
    //

    public function cheque_book_request(){

        $authToken = session()->get('userToken');
        $userID = session()->get('userId');

        $base_response = new BaseResponse();

        $data = [
                "accountNumber"=> "004001100241700194",
                "branch" => "string",
                "deviceIP" => "string",
                "numberOfLeaves" => 25,
                "pinCode" =>"1234",
                "tokenID" => "5CF53285-3558-4129-9363-3D2D41E8A5D7"

        ];

        $response = Http::get(env('API_BASE_URL') ."/request/chequeBook");

        //return $response;
        // return $response->status();


        $result = new ApiBaseResponse();
        return $result->api_response($response);

    }


}
