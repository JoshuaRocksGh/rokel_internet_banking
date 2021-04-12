<?php

namespace App\Http\Controllers\API\Transfer;

use App\Http\classes\API\BaseResponse;
use App\Http\classes\WEB\UserAuth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class LocalBankController extends Controller
{
    //
    public function international_bank_transfer_beneficiary(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'from_account' => 'required' ,
            'to_account' => 'required' ,
            'amount' => 'required' ,
            'category' => 'required' ,
            'currency' => 'required',
            'bank_name' => 'required' ,
            'secPin' => 'required' ,

        ]);


        $base_response = new BaseResponse();

        // VALIDATION
        if ($validator->fails()) {

            return $base_response->api_response('500', $validator->errors(), NULL);

        };
        // return $req;



        $user_pin = $req->secPin;

        //return $user_pin;
        if($user_pin != '123456'){

            return $base_response->api_response('999', 'Incorrect Pin',  null); // return API BASERESPONSE

        }


        $user = (object) UserAuth::getDetails();
        //return $user;

        $authToken = $user->userToken;
        $userID = $user->userId;

        $data = [

                "amount" => (float) $req->amount,
                "authToken" => $authToken,
                "bankName" => $req->bank_name,
                "beneficiaryAddress" => "string",
                "beneficiaryName" => "string",
                "creditAccount" => $req->to_account,
                "debitAccount" => $req->from_account,
                "deviceIp" => "string",
                "secPin" => $user_pin,
                "transactionDetails" => "string",
                "transactionId" => "string",
                "transferCurrency" => $req->currency,
                "payment_date" => $req->payment_date

        ];

        // return $data ;
        $response = [
            'responseCode' => '000'
        ];

        return $response ;

        // try{

        //     $response = Http::post(env('API_BASE_URL') ."transfers/otherBank",$data);

        //     // return $response;
        //     // return json_decode($response->body();

        //     if($response->ok()){ // API response status code is 200

        //         $result = json_decode($response->body());
        //         // return $result;

        //         if($result->responseCode == '000'){

        //             // $result_data = $result->data;
        //             // return $result_data;

        //             return $base_response->api_response($result->responseCode, $result->message,  $result->data); // return API BASERESPONSE



        //         } else {  // API responseCode is not 000

        //         return $base_response->api_response($result->responseCode, $result->message,  $result->data); // return API BASERESPONSE

        //         }

        //     } else { // API response status code not 200

        //         DB::table('error_logs')->insert([
        //             'platform' => 'ONLINE_INTERNET_BANKING',
        //             'user_id' => 'AUTH',
        //             'code' => $response->status(),
        //             'message' => $response->body()
        //         ]);

        //         return $base_response->api_response('500', 'API SERVER ERROR',  NULL); // return API BASERESPONSE

        //     }


        // }catch(\Exception $e){

        //     DB::table('error_logs')->insert([
        //         'platform' => 'ONLINE_INTERNET_BANKING',
        //         'user_id' => 'AUTH',
        //         'message' => (string) $e->getMessage()
        //     ]);

        //     return $base_response->api_response('500', $e->getMessage(),  NULL); // return API BASERESPONSE


        // }

    }
}
