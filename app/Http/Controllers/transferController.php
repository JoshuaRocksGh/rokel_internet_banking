<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


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

    public function own_account_beneficiary()
    {
        return view('pages.transfer.own_account_beneficiary');
    }

    public function same_bank_beneficiary()
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

    public function international_bank_()
    {
        return view('pages.transfer.international_bank');
    }

    public function beneficiary_list()
    {
        return view('pages.transfer.beneficiary_list');
    }

}
