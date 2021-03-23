<?php

namespace App\Http\Controllers\Transfers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class OwnAccountController extends Controller
{
    //

    public function own_account(Request $request){
        // Alert::success('Transaction Successful', 'Success Message');
        return view('pages.transfer.own_account');
    }

    // public function submit_own_account_transfer(Request $request)
    // {

    // };


    // if ($position = Location::get()) {
    //     // Successfully retrieved position.
    //     alert($position->countryName);
    // } else {
    //     // Failed retrieving position.
    // }

    // $ipAddress = $request->ip();

    // alert($ipAddress);
}
