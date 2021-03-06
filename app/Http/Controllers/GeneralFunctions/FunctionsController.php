<?php

namespace App\Http\Controllers\GeneralFunctions;

use App\Http\classes\API\BaseResponse;
use App\Http\classes\WEB\ApiBaseResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class FunctionsController extends Controller
{

    public function baseResponseApi($response)
    {

        $base_response = new BaseResponse();

        if ($response->ok()) {    // API response status code is 200

            $result = json_decode($response->body());
            // return $result->responseCode;


            if ($result->responseCode == '000') {

                return $base_response->api_response($result->responseCode, $result->message,  $result->data); // return API BASERESPONSE

            } else {   // API responseCode is not 000

                return $base_response->api_response($result->responseCode, $result->message,  $result->data); // return API BASERESPONSE

            }
        } else { // API response status code not 200

            return $response->body();
            DB::table('tb_error_logs')->insert([
                'platform' => 'ONLINE_INTERNET_BANKING',
                'user_id' => 'AUTH',
                'code' => $response->status(),
                'message' => $response->body()
            ]);

            return $base_response->api_response('500', 'API SERVER ERROR',  NULL); // return API BASERESPONSE

        }
    }


    public function get_fx_rate(Request $request)
    {

        if ($request->has("rateType")) {
            $rateType = $request->query("rateType");
        }

        $rateType = $request->query("rateType");

        if (empty($rateType)) {
            $rateType = "Transfer rate";
        }

        $authToken = session()->get('userToken');
        $userID = session()->get('userId');

        $data = [
            "authToken" => $authToken,
            "rateType" => $rateType
        ];

        $response = Http::post(env('API_BASE_URL') . "utilities/getFxRates", $data);

        $result = new ApiBaseResponse();
        return $result->api_response($response);
    }



    public function get_correct_fx_rate(Request $request)
    {

        $response = Http::get(env('API_BASE_URL') . "utilities/getCorrectFxRates");

        $result = new ApiBaseResponse();
        return $result->api_response($response);
    }



    public function get_my_loans_accounts()
    {
        // return 'kjsdf';


        $authToken = session()->get('userToken');
        $userID = session()->get('userId');

        $data = [
            "token" => $authToken,
        ];
        // return $data;
        // return env('API_BASE_URL') ."account/getAccounts";

        $response = Http::post(env('API_BASE_URL') . "loans/getLoans", $data);

        $result = new ApiBaseResponse();
        return $result->api_response($response);

        // return $response;
        // return $response->status();

    }



    public function get_accounts()
    {
        // return 'kjsdf';


        $authToken = session()->get('userToken');
        $userID = session()->get('userId');

        $data = [
            "authToken" => $authToken,
            "userId"    => $userID
        ];

        $base_response = new BaseResponse();

        // return $data;
        // return env('API_BASE_URL') ."account/getAccounts";

        $response = Http::post(env('API_BASE_URL') . "account/getAccounts", $data);

        $result = new ApiBaseResponse();
        return $result->api_response($response);

        // return $response;
        // return $response->status();


    }


    public function currency_list()
    {

        $authToken = session()->get('userToken');
        $userID = session()->get('userId');

        $base_response = new BaseResponse();

        $data = [
            "authToken" => $authToken,
            "userId"    => $userID
        ];

        $response = Http::get(env('API_BASE_URL') . "/utilities/getCurrencies");

        //return $response;
        // return $response->status();
        $result = new ApiBaseResponse();
        return $result->api_response($response);
    }



    public function security_question()
    {

        $authToken = session()->get('userToken');
        $userID = session()->get('userId');

        $base_response = new BaseResponse();

        $data = [
            "authToken" => $authToken,
            "userId"    => $userID
        ];

        $response = Http::get(env('API_BASE_URL') . "/utilities/getSecQuestions");

        //return $response;
        // return $response->status();
        $result = new ApiBaseResponse();
        return $result->api_response($response);
    }



    public function validate_account_no(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'accountNumber' => 'required',
        ]);

        $base_response = new BaseResponse();
        // VALIDATION
        if ($validator->fails()) {
            return $base_response->api_response('500', $validator->errors(), NULL);
        };

        // return $request;
        $account_no = $request->accountNumber;


        $base_response = new BaseResponse();

        $authToken = session()->get('userToken');
        $userID = session()->get('userId');



        $data = [
            "authToken" => $authToken,
            "accountNumber"    => $account_no
        ];

        // return $data;

        $response = Http::post(env('API_BASE_URL') . "/account/validateBBAN", $data);

        // return $response->body();

        $result = new ApiBaseResponse();
        return $result->api_response($response);
    }




    public function get_transfer_beneficiary(Request $request)
    {
        $beneType = $request->beneType;

        $authToken = session()->get('userToken');
        $userID = session()->get('userId');

        $base_response = new BaseResponse();

        $data = [
            "authToken" => $authToken,
            "userId"    => $userID
        ];
        // return env('API_BASE_URL') . "/beneficiary/getTransferBeneficiariestype}?userID=$userID&bankType=$beneType";

        $response = Http::get(env('API_BASE_URL') . "/beneficiary/getTransferBeneficiariestype}?userID=$userID&bankType=$beneType");

        // return $response;
        // return $response->status();
        $result = new ApiBaseResponse();
        return $result->api_response($response);
    }


    public function bank_list()
    {

        $response = Http::get(env('API_BASE_URL') . "/utilities/getBanks");

        //return $response;
        // return $response->status();
        $result = new ApiBaseResponse();
        return $result->api_response($response);
    }


    public function branches_list()
    {

        $response = Http::get(env('API_BASE_URL') . "/utilities/getBranches");

        //return $response;
        // return $response->status();
        $result = new ApiBaseResponse();
        return $result->api_response($response);
    }


    public function lovs_list()
    {
        $response = Http::get(env('API_BASE_URL') . "account/lovs");


        $base_response = new BaseResponse();

        if ($response->ok()) {    // API response status code is 200

            $result = json_decode($response->body());
            // return $result->responseCode;
            return $base_response->api_response("000", "List of lOVs",  $result); // return API BASERESPONSE

        } else { // API response status code not 200

            return $response->body();
            DB::table('tb_error_logs')->insert([
                'platform' => 'ONLINE_INTERNET_BANKING',
                'user_id' => 'AUTH',
                'code' => $response->status(),
                'message' => $response->body()
            ]);

            return $base_response->api_response('500', 'API SERVER ERROR',  NULL); // return API BASERESPONSE

        }
    }

    public function get_Loan_products()
    {

        $authToken = session()->get('userToken');
        $userID = session()->get('userId');



        $data = [
            "authToken" => $authToken,
            "userId"    => $userID
        ];


        $response = Http::get(env('API_BASE_URL') . "/loans/loanProducts", $data);


        $result = new ApiBaseResponse();
        return $result->api_response($response);
    }



    //method to return the interest types
    public function get_Interest_Types()
    {

        $authToken = session()->get('userToken');
        $userID = session()->get('userId');



        $data = [
            "authToken" => $authToken,
            "userId"    => $userID
        ];


        $response = Http::get(env('API_BASE_URL') . "/loans/interestTypes", $data);

        $result = new ApiBaseResponse();
        return $result->api_response($response);
    }

    //method to return the interest types
    public function get_loan_frequencies()
    {

        $authToken = session()->get('userToken');
        $userID = session()->get('userId');



        $data = [
            "authToken" => $authToken,
            "userId"    => $userID
        ];


        $response = Http::get(env('API_BASE_URL') . "/loans/loanFrequencies", $data);

        $result = new ApiBaseResponse();
        return $result->api_response($response);
    }
}
