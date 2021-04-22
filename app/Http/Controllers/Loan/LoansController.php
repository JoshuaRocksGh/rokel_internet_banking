<?php

namespace App\Http\Controllers\Loan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoansController extends Controller
{
    //
    public function loan_request()
    {
        return view('pages.loans.loan_request');
    }

    public function loan_quotation(){
        return view('pages.loans.loan_quotation');
    }
}
