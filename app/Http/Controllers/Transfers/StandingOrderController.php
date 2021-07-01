<?php

namespace App\Http\Controllers\Transfers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StandingOrderController extends Controller
{
    //method to display the standing order page
    public function display_standing_order(){
        return view('pages.transfer.standing_order');
    }

    //method to send pay load request
    public function standing_order_request(){

        [
            "acctLink": "004001100241700194",
            "approvalTerminal": "a",
            "approvedBy": "work",
            "beneficiaryAccount": "004001100241700291",
            "dueAmount": "200",
            "dueDate": "2020-06-01",
            "entrySource": "I",
            "frequencyCode": "01",
            "postedBy": "ATO",
            "terminalId": "ATO",
            "transactionDetails": "goods purchase"
        ]
    }
}
