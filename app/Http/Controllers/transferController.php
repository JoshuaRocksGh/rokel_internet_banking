<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class transferController extends Controller
{
    //
    public function transfer()
    {
        return view('pages.transfer.transfer');
    }
    public function add_beneficiary()
    {
        // return "Add Beneficiary Page";
        return view('pages.transfer.add_beneficiary');
    }

}
