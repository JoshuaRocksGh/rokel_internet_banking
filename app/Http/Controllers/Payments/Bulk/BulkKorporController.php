<?php

namespace App\Http\Controllers\Payments\Bulk;

use App\Http\classes\WEB\ApiBaseResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BulkKorporController extends Controller
{
    public function get_bulk_korpor_upload_list()
    {
        // return "hello";

        $authToken = session()->get('userToken');
        $userID = session()->get('userId');
        $customerNumber = session()->get('customerNumber');

        $response = Http::get(env('CIB_API_BASE_URL') . "get-bulk-korpor-upload-list-api?customer_no=2343&status=P");

        $result = new ApiBaseResponse();
        return $result->api_response($response);
    }

    public function get_bulk_korpor_upload_detail_list()
    {
        // return "hello";

        $authToken = session()->get('userToken');
        $userID = session()->get('userId');
        $customerNumber = session()->get('customerNumber');

        $response = Http::get(env('CIB_API_BASE_URL') . "get-bulk-korpor-upload-detail-list-api?customer_no=2343&status=P&batch_no=1624901812");

        $result = new ApiBaseResponse();
        return $result->api_response($response);
    }
}
