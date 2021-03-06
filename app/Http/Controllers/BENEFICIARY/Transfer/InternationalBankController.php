<?php

namespace App\Http\Controllers\BENEFICIARY\Transfer;

use App\Http\classes\API\BaseResponse;
use App\Http\classes\WEB\UserAuth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class InternationalBankController extends Controller
{
    //
    public function international_bank_(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'bank_country' => 'required',
            'bank_city' => 'required',
            'bank_branch' => 'required',
            'bank_name' => 'required',
            'bank_address' => 'required',
            'swift_code' => 'required',
            'acc_number' => 'required',
            'acc_name' => 'required',
            'currency' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'middlename' => 'required',
            'beneficiary_name' => 'required',
            'beneficiary_email' => 'required',
            'nationality' => 'required',
            'country_of_residence' => 'required',
            'city' => 'required',
            'address' => 'required',
            'telephone' => 'required',

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
                "beneficiaryAccount" => $req->acc_number,
                "beneficiaryAccountCurrency" => $req->currency,
            ],

            "addressDetails" => [
                "address1" => $req->address,
                "address2" => "string",
                "address3" => "string",
                "city" => $req->city,
                "countryOfResidence" => $req->country_of_residence
            ],

            "bankDetails" => [
                "bankAddress" => $req->bank_address,
                "bankBranch" => $req->bank_branch,
                "bankCity" => $req->bank_city,
                "bankCountry" => $req->bank_country,
                "bankName" => $req->bank_name,
                "bankSwiftCode" => $req->swift_code
            ],

            "beneID" => "string",

            "beneficiaryDetails" => [
                "email" => $req->beneficiary_email,
                "firstName" => $req->firstname,
                "lastName" => $req->lastname,
                "nationality" => $req->nationality,
                "nickname" => $req->beneficiary_name,
                "otherName" => $req->middlename,
                "sendMail" => $req->transfer_email
            ],

            "beneficiaryType" => "INTB",

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
            "userID" => $userID,
            "telephone" => $req->telephone,
            "beneficiaryAcountName" => $req->acc_name

        ];

        // return $data;

        try {
            $response = Http::post(env('API_BASE_URL') . "beneficiary/addTransferBeneficiary", $data);

            //return $response;
            // return json_decode($response->body());

            if ($response->ok()) { // API response status code is 200

                $result = json_decode($response->body());
                //return $result;

                if ($result->responseCode == '000') {

                    // $result_data = $result->data;
                    // return $result_data;

                    return $base_response->api_response($result->responseCode, $result->message,  $result->data); // return API BASERESPONSE



                } else {  // API responseCode is not 000

                    return $base_response->api_response($result->responseCode, $result->message,  $result->data); // return API BASERESPONSE

                }
            } else { // API response status code not 200

                DB::table('tb_error_logs')->insert([
                    'platform' => 'ONLINE_INTERNET_BANKING',
                    'user_id' => 'AUTH',
                    'code' => $response->status(),
                    'message' => $response->body()
                ]);

                return $base_response->api_response('500', 'API SERVER ERROR',  NULL); // return API BASERESPONSE

            }
        } catch (\Exception $e) {

            DB::table('tb_error_logs')->insert([
                'platform' => 'ONLINE_INTERNET_BANKING',
                'user_id' => 'AUTH',
                'message' => (string) $e->getMessage()
            ]);

            return $base_response->api_response('500', $e->getMessage(),  NULL); // return API BASERESPONSE


        }
    }

    public function edit_international_bank_beneficiary(Request $req)
    {
        return view('pages.transfer.international_bank_beneficiary');
    }

    public function update_international_bank_beneficiary(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'bank_country' => 'required',
            'bank_city' => 'required',
            'bank_branch' => 'required',
            'bank_name' => 'required',
            'bank_address' => 'required',
            'swift_code' => 'required',
            'acc_number' => 'required',
            'acc_name' => 'required',
            'currency' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'middlename' => 'required',
            'beneficiary_name' => 'required',
            'beneficiary_email' => 'required',
            'nationality' => 'required',
            'country_of_residence' => 'required',
            'city' => 'required',
            'address' => 'required',
            'telephone' => 'required',

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
                "beneficiaryAccount" => $req->acc_number,
                "beneficiaryAccountCurrency" => $req->currency,
            ],

            "addressDetails" => [
                "address1" => $req->address,
                "address2" => "string",
                "address3" => "string",
                "city" => $req->city,
                "countryOfResidence" => $req->country_of_residence
            ],

            "bankDetails" => [
                "bankAddress" => $req->bank_address,
                "bankBranch" => $req->bank_branch,
                "bankCity" => $req->bank_city,
                "bankCountry" => $req->bank_country,
                "bankName" => $req->bank_name,
                "bankSwiftCode" => $req->swift_code
            ],

            "beneID" => "string",

            "beneficiaryDetails" => [
                "email" => $req->beneficiary_email,
                "firstName" => $req->firstname,
                "lastName" => $req->lastname,
                "nationality" => $req->nationality,
                "nickname" => $req->beneficiary_name,
                "otherName" => $req->middlename,
                "sendMail" => $req->transfer_email
            ],

            "beneficiaryType" => "INTB",

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
            "userID" => $userID,
            "telephone" => $req->telephone,
            "beneficiaryAcountName" => $req->acc_name

        ];

        // return $data;

        try {
            $response = Http::post(env('API_BASE_URL') . "beneficiary/addTransferBeneficiary", $data);

            //return $response;
            // return json_decode($response->body());

            if ($response->ok()) { // API response status code is 200

                $result = json_decode($response->body());
                //return $result;

                if ($result->responseCode == '000') {

                    // $result_data = $result->data;
                    // return $result_data;

                    return $base_response->api_response($result->responseCode, $result->message,  $result->data); // return API BASERESPONSE



                } else {  // API responseCode is not 000

                    return $base_response->api_response($result->responseCode, $result->message,  $result->data); // return API BASERESPONSE

                }
            } else { // API response status code not 200

                DB::table('tb_error_logs')->insert([
                    'platform' => 'ONLINE_INTERNET_BANKING',
                    'user_id' => 'AUTH',
                    'code' => $response->status(),
                    'message' => $response->body()
                ]);

                return $base_response->api_response('500', 'API SERVER ERROR',  NULL); // return API BASERESPONSE

            }
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
