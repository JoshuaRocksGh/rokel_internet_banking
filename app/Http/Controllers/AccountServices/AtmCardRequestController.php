<?php

namespace App\Http\Controllers\AccountServices;

use App\Http\classes\API\BaseResponse;
use App\Http\classes\WEB\ApiBaseResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class AtmCardRequestController extends Controller
{
    //
    public function atm_card_request(){

            $authToken = session()->get('userToken');
            $userID = session()->get('userId');

            $base_response = new BaseResponse();

            $data = [
                    "accountNumber" => "004001100241700194",
                    "branch" => "010",
                    "pinCode" => "1234",
                    "tokenID"=> "65128474-13EF-4FDF-881D-F23C9DCD3785"
            ];

            $response = Http::post(env('API_BASE_URL') . "/request/atmCard", $data);


            // $response;
            // return $data;
            // return $response->status();
            $result = new ApiBaseResponse();
            return $this->baseResponseApi($response);


    }


}
