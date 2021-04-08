<?php

namespace App\Http\Controllers\BENEFICIARY\Transfer;

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

    public function local_bank(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'bank_name' => 'required' ,
            'account_number' => 'required' ,
            'account_name' => 'required' ,
            'beneficiary_name'  => 'required' ,
            'beneficiary_email' => 'required'  ,
            //'send_mail' => 'required',
        ]);

        // return $req;

        $base_response = new BaseResponse();


        // VALIDATION
        if ($validator->fails()) {

            return $base_response->api_response('500', $validator->errors(), NULL);

        };
        // return $req;


        $user = (object) UserAuth::getDetails();
        //return $user;

        $authToken = $user->userToken;
        $userID = $user->userId;
        $data = [
            "accountDetails" => [
                "beneficiaryAccount" => $req->account_number,
                "beneficiaryAccountCurrency" => null,
                "beneficiaryAcountName" => $req->account_name
            ],

            "addressDetails" => [
                "address1" => "string",
                "address2" => "string",
                "address3" => "string",
                "city" => "string",
                "countryOfResidence" => "string"
            ],

            "bankDetails" => [
                "bankAddress" => "string",
                "bankBranch" => "string",
                "bankCity" => "string",
                "bankCountry" => "string",
                "bankName" => $req->bank_name ,
                "bankSwiftCode" => "string"
            ],

            "beneID" => "string",

            "beneficiaryDetails" => [
                "email" => $req->beneficiary_email,
                "firstName" => "string",
                "lastName" => "string",
                "nationality" => "string",
                "nickname" => $req->beneficiary_name,
                "otherName" => "string",
                "sendMail" => $req->transfer_email
            ],

            "beneficiaryType" => "string",

            "securityDetails" => [
            "approvedBy" => "string",
            "approvedDateTime" => date('Y-m-d'),
            "createdBy" => "string",
            "createdDateTime" =>  date('Y-m-d'),
            "entrySource" => "string",
            "modifyBy" => "string",
            "modifyDateTime" =>  date('Y-m-d')
            ],

            "transactionType" => "string",
            "userID" => $userID

        ];

        //return $data;

        try{
            $response = Http::post(env('API_BASE_URL') ."beneficiary/addTransferBeneficiary",$data);

            // return json_decode($response->body());

            if($response->ok()){ // API response status code is 200

                $result = json_decode($response->body());
                // return $result;

                if($result->responseCode == '000'){

                    // $result_data = $result->data;
                    // return $result_data;

                    return $base_response->api_response($result->responseCode, $result->message,  $result->data); // return API BASERESPONSE



                } else {  // API responseCode is not 000

                return $base_response->api_response($result->responseCode, $result->message,  $result->data); // return API BASERESPONSE

                }

            } else { // API response status code not 200

                DB::table('error_logs')->insert([
                    'platform' => 'ONLINE_INTERNET_BANKING',
                    'user_id' => 'AUTH',
                    'code' => $response->status(),
                    'message' => $response->body()
                ]);

                return $base_response->api_response('500', 'API SERVER ERROR',  NULL); // return API BASERESPONSE

            }

        }catch(\Exception $e){

            DB::table('error_logs')->insert([
                'platform' => 'ONLINE_INTERNET_BANKING',
                'user_id' => 'AUTH',
                'message' => (string) $e->getMessage()
            ]);

            return $base_response->api_response('500', $e->getMessage(),  NULL); // return API BASERESPONSE


        }
    }
}
