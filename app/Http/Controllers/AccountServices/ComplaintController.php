<?php

namespace App\Http\Controllers\AccountServices;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    public function make_complaint(){
        return view('pages.accountServices.make_complaint');
    }

}
