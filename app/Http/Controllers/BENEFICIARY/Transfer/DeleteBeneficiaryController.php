<?php

namespace App\Http\Controllers\BENEFICIARY\Transfer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DeleteBeneficiaryController extends Controller
{
    //
    public function index(Request $request)
    {
        // $bene_type = $request->query('bene_type');
        $bene_id = $request->query('bene_id');

        // return $bene_type ;
        return $bene_id;

        $response = Http::delete(env('API_BASE_URL') . "deleteTransferBeneficiary", $bene_id);

        return $response;
    }
}