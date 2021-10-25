<?php

namespace App\Http\Controllers\Payments\Beneficiary;

use App\Http\classes\API\BaseResponse;
use App\Http\classes\WEB\ApiBaseResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class MobileMoneyBeneficiaryController extends Controller
{
    //

    public function add_mobile_money_beneficary(Request $request)
    {

        $validator = Validator::make($request->all(), [

            'account' => 'required',
            'nickname' => 'required',
            'paymentType' => 'required',
            'payeeName' => 'required'
        ]);

        // return $request ;

        $base_response = new BaseResponse();

        // VALIDATION
        if ($validator->fails()) {

            return $base_response->api_response('500', $validator->errors(), NULL);
        };
        // return $req;

        // $type = $request->paymentType;
        // $thisType = explode('~', $type);
        // $paymentType = $thisType[0] ;
        // return $paymentType;

        $userID = session()->get('userId');

        $data = [
            "account" => $request->account,
            "beneID" => null,
            "nickname" => $request->nickname,
            "payeeName" => $request->payeeName,
            "paymentType" => $request->paymentType,
            "securityDetails" =>
            [
                "approvedBy" => $request->approvedBy,
                "approvedDateTime" => date('Y-m-d'),
                "createdBy" => $userID,
                "createdDateTime" => date('Y-m-d'),
                "entrySource" => "NET",
                "modifyBy" => $request->modifyBy,
                "modifyDateTime" => date('Y-m-d')

            ],
            "userID" => $userID
        ];

        // return $data ;
        // dd(env('API_BASE_URL') . "beneficiary/addPaymentBeneficiary");

        try {
            $response = Http::post(env('API_BASE_URL') . "beneficiary/addPaymentBeneficiary", $data);

            // return json_decode($response->body());

            $result = new ApiBaseResponse();
            return $result->api_response($response);
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
