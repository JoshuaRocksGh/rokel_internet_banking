<?php

namespace App\Http\Controllers\Transfers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LocalBankController extends Controller
{
    //

    public function other_local_bank()
    {
        return view('pages.transfer.other_local_bank');
    }



}
