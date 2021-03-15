<?php

namespace App\Http\Controllers\AccountServices;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class accountCreationController extends Controller
{
    //
    public function account_creation()
    {
        return view('pages.accountServices.account_creation');
    }
}
