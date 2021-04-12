<?php

namespace App\Http\Controllers\AccountEnquiry;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountEnquiryController extends Controller
{
    //method to return the account enquiry screen
    public function account_enquiry(Request $request){
        $account_number = $request->query('accountNumber');
        return view('pages.accountEnquiry.accountEnquiry', ['account_number' => $account_number]);
    }


}
