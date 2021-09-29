<?php

namespace App\Http\Controllers\Transfers\QR;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GenerateQRController extends Controller
{

    public function index()
    {
        return view('pages.transfer.qr.qr_transfer');
    }
}
