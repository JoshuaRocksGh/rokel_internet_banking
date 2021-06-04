<?php

namespace App\Http\Controllers\AccountEnquiry;

use App\Http\classes\WEB\ApiBaseResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AccountEnquiryController extends Controller
{
    //method to return the account enquiry screen
    public function account_enquiry(Request $request)
    {
        $account_number = $request->query('accountNumber');
        return view('pages.accountEnquiry.accountEnquiry', ['account_number' => $account_number]);
    }

    public function list_of_accounts(){
        return view('pages.accountEnquiry.listOfAccounts');
    }

    public function account_transaction_history(Request $request)
    {
        $accountNumber = $request->accountNumber;
        $startDate = $request->startDate;
        $endDate = $request->endDate;
        $transLimit = $request->transLimit;

        $result = new ApiBaseResponse();

        $authToken = session()->get('userToken');
        $userID = session()->get('userId');


        $data = [
            // "authToken" => $authToken,
            // "userId"    => $userID
            "accountNumber" => $accountNumber,
            "authToken" =>  $authToken,
            "endDate" => $endDate,
            "entrySource" => "string",
            "startDate" => $startDate,
            "transLimit" => $transLimit


        ];
        // return $data;
        // return env('API_BASE_URL') . "account/getTransactions";

        $response = Http::post(env('API_BASE_URL') . "account/getTransactions", $data);


        return $result->api_response($response);
    }
}
