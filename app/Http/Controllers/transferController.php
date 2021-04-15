<?php

namespace App\Http\Controllers;

use App\Http\classes\API\BaseResponse;
use App\Http\classes\WEB\UserAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;


class transferController extends Controller
{
    //
    public function transfer()
    {
        return view('pages.transfer.transfer');
    }

    public function add_beneficiary()
    {
        // return "Add Beneficiary Page";
        return view('pages.transfer.add_beneficiary');
    }

    public function own_account_beneficiary()
    {
        return view('pages.transfer.own_account_beneficiary');
    }

    public function same_bank_beneficiary()
    {
        return view('pages.transfer.same_bank_beneficiary');
    }

    public function local_bank()
    {
        return view('pages.transfer.local_bank_beneficiary');
    }

    public function international_bank()
    {
        return view('pages.transfer.international_bank_beneficiary');
    }

    public function international_bank_()
    {
        return view('pages.transfer.international_bank');
    }

    public function beneficiary_list()
    {
        return view('pages.transfer.beneficiary_list');
    }

    public function all_beneficiary_list()
    {
        $authToken = session()->get('userToken');
        $userID = session()->get('userId');

        $base_response = new BaseResponse();

        $data = [
            "authToken" => $authToken,
            "userId"    => $userID
        ];

        $response = Http::get(env('API_BASE_URL') ."beneficiary/getTransferBeneficiaries/$userID");


        //return $response;
        // return $response->status();


    if($response->ok()){    // API response status code is 200

        $result = json_decode($response->body());
        // return $result->responseCode;


        if($result->responseCode == '000'){

            return $base_response->api_response($result->responseCode, $result->message,  $result->data); // return API BASERESPONSE

        }else{   // API responseCode is not 000

            return $base_response->api_response($result->responseCode, $result->message,  $result->data); // return API BASERESPONSE

            }

        } else { // API response status code not 200

             return $response->body();
            // DB::table('error_logs')->insert([
            //     'platform' => 'ONLINE_INTERNET_BANKING',
            //     'user_id' => 'AUTH',
            //     'code' => $response->status(),
            //     'message' => $response->body()
            // ]);

            return $base_response->api_response('500', 'API SERVER ERROR',  NULL); // return API BASERESPONSE

        }
    }

}
