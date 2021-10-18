<?php

namespace App\Http\Controllers\Payments;

use App\Http\classes\WEB\ApiBaseResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class paymentController extends Controller
{
    //
    public function utilities()
    {
        return view('pages.payments.utility');
    }

    public function list_of_payments()
    {
        return view("pages.payments.list_of_payments");
    }

    public function add_beneficiary()
    {
        return view("pages.payments.payment_add_beneficiary");
    }

    public function mobile_money_beneficiary()
    {
        return view("pages.payments.mobile_money_beneficiary");
    }

    public function utility_payment_beneficiary()
    {
        return view("pages.payments.utility_payment_beneficiary");
    }

    public function saved_beneficiary()
    {
        return view("pages.payments.saved_beneficiary");
    }

    public function mobile_money_payment()
    {
        return view("pages.payments.mobile_money_saved_beneficiary");
    }

    public function utility_payment()
    {
        return view("pages.payments.utility_saved_beneficiary");
    }

    public function one_time()
    {
        return view("pages.payments.one_time_payment");
    }

    //method to return the airtime payment screen
    public function airtime_payment()
    {
        return view("pages.payments.airtime_payment");
    }

    //method to return the bulk upload payment screen
    public function bulk_upload_payment()
    {
        return view("pages.payments.bulk_upload_payment");
    }



    //method to return the cardless payment screen
    public function cardless_payment()
    {
        return view("pages.payments.cardless_payment");
    }

    //method to return the korpone loane payment screen
    public function e_korpor()
    {

        return view("pages.payments.e_korpor");
    }

    //method to return the order blink payment screen
    public function order_blink_payment()
    {
        return view("pages.payments.order_blink_payment");
    }

    //method to return the pay again payment screen
    public function pay_again_payment()
    {
        return view("pages.payments.pay_again_payment");
    }

    //method to return the qr payment screen
    public function qr_payment()
    {
        return view("pages.payments.qr_payment");
    }

    //method to return the request blink payment screen
    public function request_blink_payment()
    {
        return view("pages.payments.request_blink_payment");
    }

    //method to return the schudule payment screen
    public function schedule_payment()
    {
        return view("pages.payments.schedule_payment");
    }

    public function payment_beneficiary_list(Request $request)
    {
        $payment_type = $request->query('beneficiary_type');


        if ($payment_type == 'MOM') {
            return view('pages.payments.beneficiary.mobile_money_beneficiary', ['paymentType' => $payment_type]);
        } else if ($payment_type == 'AIR') {
            return back();
        } else if ($payment_type == 'UTL') {
            return view('pages.payments.utility', ['paymentType' => $payment_type]);
        } else if ($payment_type == 'EDU') {
            return back();
        } else if ($payment_type == 'GVT') {
            return back();
        } else {
            return view('pages.payments.payment_beneficiary');
        }
    }

    public function beneficiary_list()
    {

        return view('pages.payments.payment_beneficiary_list');
    }

    public function paymentBeneficiaries()
    {
        $userID = session()->get('userId');
        $response = Http::get(env('API_BASE_URL') . "beneficiary/getPaymentBeneficiaries/$userID");
        $result = new ApiBaseResponse();
        return $result->api_response($response);
    }
}
