<?php

namespace App\Http\Controllers\BENEFICIARY\Payment;

use App\Http\classes\API\BaseResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MobileMoneyBeneficiaryController extends Controller
{
    //

    public function add_mobile_money_beneficary(Request $request) {

        $validator = Validator::make($request->all(), [

            'account' => 'required',
            'nickname' => 'required',
            'paymentType' => 'required',
            'payeeName' => 'required'
        ]);

        return $request ;

        $base_response = new BaseResponse();

        // VALIDATION
        if ($validator->fails()) {

            return $base_response->api_response('500', $validator->errors(), NULL);
        };
        // return $req;
    }
}
