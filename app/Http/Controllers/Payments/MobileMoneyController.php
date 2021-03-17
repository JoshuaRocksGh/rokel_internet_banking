<?php

namespace App\Http\Controllers\Payments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MobileMoneyController extends Controller
{
    public function index()
    {
        return view('pages.payments.mobile_money.index');
    }
}
