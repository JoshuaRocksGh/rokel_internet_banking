<?php

namespace App\Http\Controllers\BENEFICIARY\Transfer;

use App\Http\classes\API\BaseResponse;
use App\Http\classes\WEB\ApiBaseResponse;
use App\Http\classes\WEB\UserAuth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class SameBankController extends Controller
{
    //

    public function currency_list(){

        $authToken = session()->get('userToken');
        $userID = session()->get('userId');

        $base_response = new BaseResponse();

        $data = [
            "authToken" => $authToken,
            "userId"    => $userID
        ];

        $response = Http::get(env('API_BASE_URL') ."/utilities/getCurrencies");

        //return $response;
        // return $response->status();
        $result = new ApiBaseResponse();
        return $result->api_response($response);

    }

    public function same_bank_beneficiary_(Request $req){
        $validator = Validator::make($req->all(),[
            'account_number' => 'required' ,
            'account_name' => 'required' ,
            'beneficiary_name' => 'required',
            'beneficiary_email' => 'required',
            'beneficiary_address' => 'required',
            'number' => 'required' ,
            'account_currency' => 'required' ,
            //'send_mail' => 'required',

        ]);

        // return $req;

        $base_response = new BaseResponse();


        // VALIDATION
        if ($validator->fails()) {

            return $base_response->api_response('500', $validator->errors(), NULL);

        };

        // return $req;

        $authToken = session()->get('userToken');
        $userID = session()->get('userId');


        $data = [
                    "accountDetails" => [
                        "beneficiaryAccount" => $req->account_number,
                        "beneficiaryAccountCurrency" => $req->account_currency,
                        "beneficiaryAcountName" => $req->account_name
                    ],

                    "addressDetails" => [
                        "address1" => $req->beneficiary_address,
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
                        "bankName" => "string",
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

                    "beneficiaryType" => "SAB",

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
                    "userID" => $userID ,
                    "telephone" => $req->number

        ];

        // return $data;

        try{
            $response = Http::post(env('API_BASE_URL') ."beneficiary/addTransferBeneficiary",$data);

            // return json_decode($response->body());
            $result = new ApiBaseResponse();
            return $result->api_response($response);

        }catch(\Exception $e){

            DB::table('error_logs')->insert([
                'platform' => 'ONLINE_INTERNET_BANKING',
                'user_id' => 'AUTH',
                'message' => (string) $e->getMessage()
            ]);

            return $base_response->api_response('500', $e->getMessage(),  NULL); // return API BASERESPONSE


        }
    }
    public function edit_same_bank_beneficiary(Request $request){

        $bene_type = $request->query('bene_type');
        $bene_id = $request->query('bene_id');

        return view('pages.transfer.same_bank_beneficiary', ['bene_type' => $bene_type, 'bene_id' => $bene_id]);

    }

    public function update_same_bank_beneficiary(Request $req){
        $validator = Validator::make($req->all(),[
            'account_number' => 'required' ,
            'account_name' => 'required' ,
            'beneficiary_name' => 'required',
            'beneficiary_email' => 'required',
            'beneficiary_address' => 'required',
            'number' => 'required' ,
            'account_currency' => 'required' ,
            'beneficiary_id' => 'required'
            //'send_mail' => 'required',

        ]);

        // return $req;

        $base_response = new BaseResponse();


        // VALIDATION
        if ($validator->fails()) {

            return $base_response->api_response('500', $validator->errors(), NULL);

        };

        // return $req;


        $authToken = session()->get('userToken');
        $userID = session()->get('userId');


        $data = [
                    "accountDetails" => [
                        "beneficiaryAccount" => $req->account_number,
                        "beneficiaryAccountCurrency" => $req->account_currency,
                        "beneficiaryAcountName" => $req->account_name
                    ],

                    "addressDetails" => [
                        "address1" => $req->beneficiary_address,
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
                        "bankName" => "string",
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

                    "beneficiaryType" => "SAB",

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
                    "userID" => $userID ,
                    "telephone" => $req->number

        ];

        // return $data;

        try{
            $response = Http::post(env('API_BASE_URL') ."beneficiary/addTransferBeneficiary",$data);

            // return json_decode($response->body());

            $result = new ApiBaseResponse();
            return $result->api_response($response);

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
