<?php

namespace App\Http\Controllers\Corporate\Approvals;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PendingController extends Controller
{
    public function approvals_pending()
    {
        // return $request_id;
        return view('pages.corporate.approvals.pending');
    }


    public function get_approvals_pending()
    {
    }


    public function approvals_pending_transfer_details($request_id , $customer_no)
    {

        // return $customer_no;

        $mandate = session()->get('userMandate');
        // return $mandate;
        if ($mandate == 'A') {

            return view('pages.corporate.approvals.pending_transfer_details', [ 'request_id'=> $request_id, 'customer_no'=> $customer_no , 'mandate' => $mandate]);

        }else {
            return ('Not Authorized To Approve Pendding Request');
        }
    }
}
