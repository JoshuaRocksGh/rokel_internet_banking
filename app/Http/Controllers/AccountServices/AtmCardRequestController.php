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
    public function atm_card_request(Request $request){

            $authToken = session()->get('userToken');
            $userID = session()->get('userId');

            $branch = $request->pick_up_branch;
            $cardType = $request->type_of_card;
            $accountNumber = $request->account_no;
            $pin_code = $request->pin;

            $base_response = new BaseResponse();

            $data = [
                    // "accountNumber" => "004001100241700194",
                    // "branch" => "010",
                    // "pinCode" => "1234",
                    // "tokenID"=> "65128474-13EF-4FDF-881D-F23C9DCD3785"


                    "accountNumber" => $accountNumber,
                    "branch" => $branch,
                    "cardNumber"=> "",
                    "entrySource"=> "a",
                    "pinCode" => $pin_code,
                    "tokenID"=> $authToken
                ];
                // {
                //     "accountNumber": "004001088601110143",
                //     "branch": "001",
                //     "cardNumber": "",
                //     "entrySource": "a",
                //     "pinCode": "1234",
                //     "tokenID": "617BE525-7059-4CF7-811C-F744D68F4826"
                //   }

            // return $data;

            $response = Http::post(env('API_BASE_URL') . "/request/atmCard", $data);


            // $response;
            // return $data;
            // return $response->status();
            $result = new ApiBaseResponse();
            return  $result->api_response($response);


    }


}
