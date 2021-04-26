<?php

namespace App\Http\Controllers\Transfers\BulkUpload;

use App\Http\classes\WEB\ApiBaseResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BulkUploadsController extends Controller
{
    public function index()
    {
        return view('pages.transfer.bulkTransfers.bulk_trasnfer');
    }


    public function get_bulk_upload_list(Request $request)
    {

        $data = '{
  "responseCode": "000",
  "message": "Available bulk files",
  "data": [
    {
      "BATCH_NO": "1594718866",
      "ACCOUNT_NO": "004008210057725128",
      "BANK_CODE": "I",
      "STATUS": "A",
      "REF_NO": "SLCB9999",
      "TOTAL_AMOUNT": "2996619122.00",
      "VALUE_DATE": "15-Jul-2020"
    },
    {
      "BATCH_NO": "1594663539",
      "ACCOUNT_NO": "004008210057725128",
      "BANK_CODE": "I",
      "STATUS": "A",
      "REF_NO": "SLCB6666",
      "TOTAL_AMOUNT": "2996619122",
      "VALUE_DATE": "15-Jul-2020"
    }
  ]
}';
        return json_decode($data, true);


        $customer_no = $request->query("customer_no");
        // return $customer_no;

        $authToken = session()->get('userToken');
        $userID = session()->get('userId');

        // return env('API_BASE_URL') . "corporate/getBulkUploadFile?customerNumber=$customer_no";
        $response = Http::get(env('API_BASE_URL') . "corporate/getBulkUploadFile?customerNumber=$customer_no");

        $result = new ApiBaseResponse();
        return $result->api_response($response);
    }
}