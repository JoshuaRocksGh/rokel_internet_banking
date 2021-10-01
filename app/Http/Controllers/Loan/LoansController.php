<?php

namespace App\Http\Controllers\Loan;

use App\Http\Controllers\Controller;
use App\Http\classes\WEB\ApiBaseResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class LoansController extends Controller
{
    //
    public function loan_request()
    {
        return view('pages.loans.loan_request');
    }
}
