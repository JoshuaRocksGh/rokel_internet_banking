<?php

namespace App\Http\Controllers\GeneralFunctions;

use App\Http\classes\API\BaseResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

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
            DB::table('error_logs')->insert([
                'platform' => 'ONLINE_INTERNET_BANKING',
                'user_id' => 'AUTH',
                'code' => $response->status(),
                'message' => $response->body()
            ]);

            return $base_response->api_response('500', 'API SERVER ERROR',  NULL); // return API BASERESPONSE

        }
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

        return $this->baseResponseApi($response);

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

        return $this->baseResponseApi($response);

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
        return $this->baseResponseApi($response);
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
        return $this->baseResponseApi($response);
    }


        public function bank_list()
        {

            $authToken = session()->get('userToken');
            $userID = session()->get('userId');

            $base_response = new BaseResponse();

            $data = [
                "authToken" => $authToken,
                "userId"    => $userID
            ];

            $response = Http::get(env('API_BASE_URL') . "/utilities/getBanks");

            //return $response;
            // return $response->status();
            return $this->baseResponseApi($response);
        }


    public function bank_branches_list()
    {

        $authToken = session()->get('userToken');
        $userID = session()->get('userId');

        $base_response = new BaseResponse();

        $data = [
            "authToken" => $authToken,
            "userId"    => $userID
        ];

        $response = Http::get(env('API_BASE_URL') . "/utilities/getBranches");

        //return $response;
        // return $response->status();
        return $this->baseResponseApi($response);
    }


    public function get_beneficiary_list(Request $request)
    {
        $bene_type = $request->query('bene_type');

        $authToken = session()->get('userToken');
        $userID = session()->get('userId');

        $base_response = new BaseResponse();


        $response = Http::get(env('API_BASE_URL') . "/beneficiary/getTransferBeneficiariestype}?userID=$userID&bankType=$bene_type");

        //return $response;
        // return $response->status();
        return $this->baseResponseApi($response);
    }

}
