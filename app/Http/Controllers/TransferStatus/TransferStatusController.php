<?php

namespace App\Http\Controllers\TransferStatus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransferStatusController extends Controller
{
    public function transfer_status()
    {
        return view('pages.transfer_status.index');
    }
}