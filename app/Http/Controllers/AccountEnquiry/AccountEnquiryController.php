<?php

namespace App\Http\Controllers\AccountEnquiry;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountEnquiryController extends Controller
{
    //method to return the account enquiry screen
    public function account_enquiry(){
        return view('pages.accountEnquiry.accountEnquiry');
    }

    
}
