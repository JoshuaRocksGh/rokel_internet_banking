<?php

namespace App\Http\Controllers\Transfers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditBeneficiaryController extends Controller
{
    //
    public function edit_same_bank_beneficary()
    {
        // $name = $request->query('name');
        return view('pages.transfer.edit-same-bank-beneficiary');
    }
}
