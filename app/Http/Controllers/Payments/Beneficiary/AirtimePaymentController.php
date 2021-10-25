<?php

namespace App\Http\Controllers\Payments\Beneficiary;

use App\Http\classes\API\BaseResponse;
use App\Http\classes\WEB\ApiBaseResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class AirtimePaymentController extends Controller
{
    //
    public function airtime_payment(Request $request)
    {

        $validator = Validator::make($request->all(),  [

            'from_account' => 'required',
            'currency' => 'required',
            'amount' => 'required',
            'receipient_number' => 'required',
            'category_' => 'required',
            'receipient_network' => 'required',
            'naration' => 'required',
            'user_pin' => 'required'
        ]);

        // return $request;


        $base_response = new BaseResponse();


        // VALIDATION
        if ($validator->fails()) {

            return $base_response->api_response('500', $validator->errors(), NULL);
        };

        // return $request;


        $user_pin = $request->user_pin;

        // return $user_pin;

        if ($user_pin != '123456') {

            return $base_response->api_response('098', 'Incorrect Pin',  null); // return API BASERESPONSE

        }

        $authToken = session()->get('userToken');
        $userID = session()->get('userId');

        $data = [

            'from_account' => $request->from_account,
            'currency' => $request->currency,
            'amount' => $request->amount,
            'receipient_number' => $request->receipient_number,
            'category_' => $request->category_,
            'receipient_network' => $request->receipient_network,
            'naration' => $request->naration,
            'user_pin' => $request->user_pin,
            'authToke' => $authToken,
            'userID' => $userID
        ];

        // return $data ;

        $response = [
            'responseCode' => "000",
            'message' => "Mobile Money transfer Successful"
        ];

        return $response;

        try {
            $response = Http::post(env('API_BASE_URL') . "beneficiary/addTransferBeneficiary", $data);

            // return json_decode($response->body());

            $result = new ApiBaseResponse();
            return $result->api_response($response);
        } catch (\Exception $e) {

            DB::table('tb_error_logs')->insert([
                'platform' => 'ONLINE_INTERNET_BANKING',
                'user_id' => 'AUTH',
                'message' => (string) $e->getMessage()
            ]);

            return $base_response->api_response('500', $e->getMessage(),  NULL); // return API BASERESPONSE


        }
    }
}
