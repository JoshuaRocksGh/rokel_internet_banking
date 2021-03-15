<?php

namespace App\Http\Controllers\BranchLocator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class branchLocatorController extends Controller
{
    //
    public function branch_locator()
    {
        return view('pages.branchLocator.branch_locator');
    }
}
