<?php

namespace App\Http\Controllers\BENEFICIARY\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;

class PaymentTypesController extends Controller
{
    //

    public function index()
    {

        return view('pages.payments.payment_types');
    }

    public function paymentTypes($payment_type_code)
    {
        $payment_type = $payment_type_code;

        if ($payment_type == 'MOM') {
            return view('pages.payments.mobile_money_payment', ['payment_type' => $payment_type]);
        } else if ($payment_type == 'AIR') {
            return view('pages.payments.airtime_payment', ['payment_type' => $payment_type]);
        } else if ($payment_type == 'UTL') {
            return view('pages.payments.utility');
        } else if ($payment_type == 'EDU') {
            return back();
        } else if ($payment_type == 'GVT') {
            return back();
        } else {
            return false;
        }
    }

    public function add_beneficiary(Request $request)
    {
        return ('This controller');

        $payment_type = $request->query('bene_type');



        // echo ($payment_type);

        return $payment_type;


        if ($payment_type == 'AIR') {
            return view('pages.payments.beneficiary.mobile_money_beneficiary', ['paymentType' => $payment_type]);
        } else if ($payment_type == 'AIR') {
            return back();
        } else if ($payment_type == 'UTL') {
            return back();
        } else if ($payment_type == 'EDU') {
            return back();
        } else if ($payment_type == 'GVT') {
            return back();
        } else {
            return false;
        }
    }
}
