<?php

namespace App\Http\Controllers;

use App\Http\classes\API\BaseResponse;
use App\Http\classes\WEB\ApiBaseResponse;
use App\Http\classes\WEB\UserAuth;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
    public function forex_request()
    {
        return view('pages.transfer.forex_rate');
    }

    public function all_beneficiary_list()
    {
        $authToken = session()->get('userToken');
        $userID = session()->get('userId');



        $data = [
            "authToken" => $authToken,
            "userId"    => $userID
        ];

        $response = Http::get(env('API_BASE_URL') . "beneficiary/getTransferBeneficiaries/$userID");

        $result = new ApiBaseResponse();
        return $result->api_response($response);
    }

    public function delete_beneficiary(Request $request)
    {
        $beneficiaryId = $request->beneficiaryId;

        return $beneficiaryId;
    }
}