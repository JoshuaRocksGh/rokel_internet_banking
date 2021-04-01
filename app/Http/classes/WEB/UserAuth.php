<?php

namespace App\Http\classes\WEB;

use Illuminate\Support\Facades\Session;

class UserAuth
{
    public static function getDetails()
    {
        if (Session::has('user')  )
        {
            return session('user');
        }else{
            return 'hellss';
        }
        // return 'HEY';
    }
}