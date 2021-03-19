<?php

namespace App\Http\Controllers\Loan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoansController extends Controller
{
    //
    public function loans()
    {
        return view('pages.loans.loan_qoutation');
    }
}
