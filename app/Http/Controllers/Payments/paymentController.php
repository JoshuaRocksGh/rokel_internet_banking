<?php

namespace App\Http\Controllers\Payments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class paymentController extends Controller
{
    //
    public function add_beneficiary()
    {
        return view("pages.payments.payment_add_beneficiary");
    }

    public function mobile_money_beneficiary()
    {
        return view("pages.payments.mobile_money_beneficiary");
    }

    public function utility_payment_beneficiary(){
        return view("pages.payments.utility_payment_beneficiary");
    }

    public function saved_beneficiary()
    {
        return view("pages.payments.saved_beneficiary");
    }
}
