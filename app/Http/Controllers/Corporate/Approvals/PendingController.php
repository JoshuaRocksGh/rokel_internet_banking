<?php

namespace App\Http\Controllers\Corporate\Approvals;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PendingController extends Controller
{
    public function approvals_pending()
    {
        return view('pages.corporate.approvals.pending');
    }

    public function approvals_pending_transfer_details()
    {
        return view('pages.corporate.approvals.pending_transfer_details');
    }
}
