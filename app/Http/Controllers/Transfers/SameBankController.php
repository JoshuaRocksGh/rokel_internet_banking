<?php

namespace App\Http\Controllers\Transfers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SameBankController extends Controller
{
    //

    public function same_bank(){
        return view('pages.transfer.same_bank_');
    }

}
