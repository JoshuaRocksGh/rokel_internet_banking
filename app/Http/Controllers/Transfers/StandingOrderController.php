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
}
