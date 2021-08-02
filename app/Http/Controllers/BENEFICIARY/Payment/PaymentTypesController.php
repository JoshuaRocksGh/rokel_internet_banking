<?php

namespace App\Http\Controllers\BENEFICIARY\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
            return back();
        } else if ($payment_type == 'AIR') {
            return view('pages.payments.airtime_payment', ['payment_type' => $payment_type]);
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