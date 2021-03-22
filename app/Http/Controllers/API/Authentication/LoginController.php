<?php

namespace App\Http\Controllers\API\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    //

    public function login_(Request $req)
    {
        // console.log($req);
        $validator = Validator::make($req -> all(), [
            'email' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            // Alert::success('Transaction Successful', 'Success Message');
            // Alert::error('Error Title', 'Error Message');

            return view('home');

        };
        return $req;
    }
}
