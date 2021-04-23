<?php

namespace App\Http\Controllers\Transfers\BulkUpload;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BulkUploadsController extends Controller
{
    public function index()
    {
        return view('pages.transfer.bulkTransfers.bulk_trasnfer');
    }
}