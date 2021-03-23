<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{

    //method to show the change password page
    public function change_password(){
        return view('pages.authentication.change_password');
    }

    //method to show reset success page
    public function reset_success(){
        return view('pages.authentication.reset_success');
    }

}
