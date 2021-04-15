<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    //
    public function logout_()
    {
        Auth::logout();

        // session()->forget('user');
        session()->flush();

        return redirect()->route('login');
        // return Redirect::route('home');
    }
}
