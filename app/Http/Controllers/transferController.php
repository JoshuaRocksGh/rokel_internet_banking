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

    public function same_bank()
    {
        return view('pages.transfer.same_bank_beneficiary');
    }

    public function local_bank()
    {
        return view('pages.transfer.local_bank_beneficiary');
    }

    public function international_bank()
    {
        return view('pages.transfer.international_bank_beneficiary');
    }


}
