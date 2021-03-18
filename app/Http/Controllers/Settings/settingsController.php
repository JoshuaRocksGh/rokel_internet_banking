<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class settingsController extends Controller
{
    //
    public function settings()
    {
        return view('pages.settings.settings');
    }
}
