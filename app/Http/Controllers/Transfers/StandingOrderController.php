<?php

namespace App\Http\Controllers\Transfers;

use App\Http\classes\API\BaseResponse;
use App\Http\classes\WEB\ApiBaseResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class StandingOrderController extends Controller
{
    //method to display the standing order page
    public function display_standing_order(){
        return view('pages.transfer.standing_order');
    }

    //method to send pay load request
    public function standing_order_request(Request $request){
        // $validator = Validator::make($request->all(), [

        //     "acctLink"=> "required",
        //     "approvalTerminal"=> "required",
        //     "approvedBy"=> "required",
        //     "beneficiaryAccount"=> "required",
        //     "dueAmount"=> "required",
        //     "dueDate"=> "required",
        //     "entrySource"=> "required",
        //     "frequencyCode"=> "required",
        //     "postedBy"=> "required",
        //     "terminalId"=> "required",
        //     "transactionDetails"=> "required"
        // ]);

        // // return $request;

        // $base_response = new BaseResponse();

        // // VALIDATION
        // if ($validator->fails()) {

        //     return $base_response->api_response('500', $validator->errors(), NULL);
        // };
        // return $req;

        $authToken = session()->get('userToken');
        $userID = session()->get('userId');
        $api_headers = session()->get('headers');
        $sender_name = session()->get('userAlias');
        $ip_address =
        // return $api_headers;

            $accLink= $request->from_account;
            $approvalTerminal= get_current_user();
            $approvedBy = $sender_name;
            $beneficiaryAccount = $request->beneficiary_account;
            $dueAmount= $request->amount;
            $dueDate = $request->standing_order_end_date;
            $startDate = $request->standing_order_start_date;
            $frequencyCode = $request->standing_order_frequency;
            $postedBy = $sender_name;
            $terminalId = get_current_user();
            $transactionDetails = $request->narration;


            // $data =
            // [
            //     "acctLink"=> "004001100241700194",
            //     "approvalTerminal"=> "a",
            //     "approvedBy"=> "work",
            //     "beneficiaryAccount"=> "004001100241700291",
            //     "dueAmount"=> "200",
            //     "dueDate"=> "2020-06-01",
            //     "entrySource"=> "I",
            //     "frequencyCode"=> "01",
            //     "postedBy"=> "ATO",
            //     "terminalId"=> "ATO",
            //     "transactionDetails"=> "goods purchase"
            // ];

            $data =
            // [
            //     "amount": "20",
            //     "authToken": "string",
            //     "bankCode": "string",
            //     "creditAccount": $accLink,
            //     "debitAccount": $beneficiaryAccount,
            //     "deviceIp": "string",
            //     "effectiveDate": $startDate,
            //     "expiryDate": $dueDate,
            //     "frequency": $frequencyCode,
            //     "pinCode"=> $pin_code,
            //     "transactionDesc"=> $transactionDetails
            //  ]

            $data =
            [
                "acctLink"=> $accLink,
                "approvalTerminal"=> $approvalTerminal,
                "approvedBy"=> $approvedBy,
                "beneficiaryAccount"=> $beneficiaryAccount,
                "dueAmount"=> $dueAmount,
                "dueDate"=> $dueDate,
                "entrySource"=> "I",
                "frequencyCode"=> $frequencyCode,
                "postedBy"=> $postedBy,
                "terminalId"=> $terminalId,
                "transactionDetails"=> $transactionDetails
            ];

            return $data;

        try {
            $response = Http::withHeaders($api_headers)->post(env('API_BASE_URL') . "transfers/standingOrder", $data);


            // return $response;

            $result = new ApiBaseResponse();
            return $result->api_response($response);
        } catch (\Exception $e) {

            DB::table('tb_error_logs')->insert([
                'platform' => 'ONLINE_INTERNET_BANKING',
                'user_id' => 'AUTH',
                'message' => (string) $e->getMessage()
            ]);

            // return $base_response->api_response('500', "Internal Server Error",  NULL); // return API BASERESPONSE


        }

    }




    // public function initiate_cardless(Request $request)
    // {



    // }
}
