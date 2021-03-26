<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class settingsController extends Controller
{
    //method to return the change pin screen
    public function change_pin()
    {
        return view('pages.settings.change_pin');
    }

    //method to return the biometric setup screen
    public function biometric_setup(){
        return view('pages.settings.biometric_setup');
    }

    //method to return the forgot transaction pin screen
    public function forgot_transaction_pin(){
        return view('pages.settings.forgot_transaction_pin');
    }

    //method to return the set transaction limit screen
    public function set_transaction_limit(){
        return view('pages.settings.set_transaction_limit');
    }

    //method to return the biometric setup
    public function update_company_info(){
        return view('pages.settings.update_company_info');
    }


}
