<?php

namespace App\Http\Controllers\Corporate\GeneralFunctions;

use App\Http\classes\API\BaseResponse;
use App\Http\classes\WEB\ApiBaseResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FunctionsController extends Controller
{
    //


    public function get_pending_requests(Request $request)
    {
        $customerNumber = $request->customerNumber;
        $requestStatus = $request->requestStatus;

        $authToken = session()->get('userToken');
        $userID = session()->get('userId');

        $base_response = new BaseResponse();

        $data = [
            "authToken" => $authToken,
            "userId"    => $userID
        ];

        $response = Http::get(env('API_BASE_URL') . "/corporate/getCorporateTransfers?customerNumber=$customerNumber&requestStatus=$requestStatus");

        //return $response;
        // return $response->status();
        $result = new ApiBaseResponse();
        return $result->api_response($response);
    }
}