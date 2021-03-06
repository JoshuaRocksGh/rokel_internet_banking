<?php

namespace App\Http\Controllers\Transfers\BulkUpload;

use App\Http\classes\API\BaseResponse;
use App\Http\classes\WEB\ApiBaseResponse;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class BulkUploadsController extends Controller
{
    public function index()
    {
        return view('pages.transfer.bulkTransfers.bulk_trasnfer');
    }

    public function download_same_bank()
    {
        $pathToFile = public_path() . '/assets/images/bulk_payment_same_bank.xlsx';

        $header = array(
            'Content-Type' => 'application/xlsx'
        );
        return response()->download($pathToFile, 'Bulk_Payment_Same_bank_File.xlsx');
    }

    public function download_other_bank()
    {
        $pathToFile = public_path() . '/assets/images/bulk_payment_other_bank.xlsx';

        $header = array(
            'Content-Type' => 'application/xlsx'
        );
        return response()->download($pathToFile, 'Bulk_Payment_Other_bank_File.xlsx');
    }

    public function upload_file(Request $request)
    {
        $documentRef = time();
        $account_no = $request->account_no;
        $bank_code = $request->bank_type;
        $trans_ref_no = $request->trans_ref_no;
        $total_amount = $request->total_amount;
        $value_date = $request->value_date;

        $this->validate($request, [
            'select_file' => 'required|mimes:xls,xlsx',
            'account_no' => 'required',
            'bank_code' => 'required',
            'trans_ref_no' => 'required',
            'total_amount' => 'required',
            'value_date' => 'required',
        ]);

        $path = $request->file('select_file')->getRealPath();

        $file = $request->file('select_file');
        $ext = $file->getClientOriginalExtension();
        $name = strtoupper($documentRef) . '~' . strtoupper($trans_ref_no) . '~' . strtoupper($total_amount) . '.' . $ext;

        $post_date = Carbon::now();
        $post_date = $post_date->toDateTimeString();

        $pathToFile = public_path() . '/assets/images/bulk_payment_other_bank.xlsx';

        $header = array(
            'Content-Type' => 'application/xlsx'
        );
        return response()->download($pathToFile, 'Bulk_Payment_Other_bank_File.xlsx');
    }


    public function get_bulk_upload_list(Request $request)
    {

        $customerNumber = $request->query("customer_no");
        // return $customer_no;

        $files = DB::table('tb_corp_bank_import_excel')
            ->distinct()
            ->where('user_id', $customerNumber)
            ->orderBy('batch_no', 'desc')
            ->get(['batch_no', 'account_no', 'bank_code', 'status', 'ref_no', 'total_amount', 'value_date']);

        return [
            'responseCode' => '000',
            'message' => "Available Uploads",
            'data' => $files
        ];
    }


    public function view_bulk_transfer(Request $request)
    {

        $batch_no = $request->query('batch_no');
        $account_no = $request->query('account_no');
        $bank_type = $request->query('bank_type');

        $customer_no = session()->get('customerNumber');

        // if (null !== ($request->query('batch_no') || $request->query('account_no') || $request->query('bank_type'))) {
        //     return back();
        // }

        return view('pages.transfer.bulkTransfers.view_bulk_trasnfer', [
            'customer_no' => $customer_no,
            'batch_no' => $batch_no,
            'account_no' => $account_no,
            'bank_type' => $bank_type,
        ]);
    }

    public function get_bulk_upload_file_details(Request $request)
    {

        $batch_no = $request->query('batch_no');
        $account_no = $request->query('account_no');
        $bank_type = $request->query('bank_type');

        $files = DB::table('tb_corp_bank_import_excel')->where('batch_no', $batch_no)->get();

        return [
            'responseCode' => '000',
            'message' => "Detail of upload transfer",
            'data' => $files
        ];
    }



    public function post_bulk_transaction(Request $request)
    {

        $batch_no = $request->query('batch_no');
        // $batch_no = $request->batch_no;
        $authToken = session()->get('userToken');
        $userID = session()->get('userId');

        $files = DB::table('tb_corp_bank_import_excel')->where('batch_no', $batch_no)->get();

        // return $files;

        $credit_data = [];
        $debit_data = [];

        foreach ($files as $data) {

            $credit['creditAccount'] = $data->BBAN;
            $credit['creditAmount'] = (float) $data->AMOUNT;
            $credit['creditBranch'] = '001';
            $credit['debitCurrency'] = 'SLL';
            $credit['creditNarration'] =  $data->TRANS_DESC;
            $credit['creditProdRef'] = $data->REF_NO;

            array_push($credit_data, $credit);
        }

        $debit_data['debitAccount'] = $files[0]->ACCOUNT_NO;
        $debit_data['debitAmount'] = (float) $files[0]->TOTAL_AMOUNT;
        $debit_data['debitCurrency'] = 'SLL';
        $debit_data['debitNarration'] = $files[0]->TRANS_DESC;
        $debit_data['debitProdRef'] = $files[0]->REF_NO;

        $data = [
            "approvedBy" => "string",
            "branch" => "string",
            "channelCode" => "string",
            "department" => "rr",
            "postedBy" => "KOBBY",
            "referenceNo" => "string",
            "transType" => "string",
            "unit" => "yyy",
            "debitAccounts" => [$debit_data],
            "creditAccounts" => $credit_data,
        ];

        // return  $data;

        $response = Http::post(env('API_BASE_URL') . "/transfers/sameBankBulkUpload", $data);

        // $result = new ApiBaseResponse();
        $base_response = new BaseResponse();

        if ($response->ok()) {    // API response status code is 200

            $result = json_decode($response->body());
            // return $result->responseCode;


            if ($result->responseCode == '000') {

                $update_db = DB::table('tb_corp_bank_import_excel')
                    ->where('batch_no', $batch_no)
                    ->update([
                        'status' => 'A'
                    ]);

                return $base_response->api_response($result->responseCode, $result->message,  $result->data); // return API BASERESPONSE

            } else {   // API responseCode is not 000

                return $base_response->api_response($result->responseCode, $result->message,  $result->data); // return API BASERESPONSE

            }
        } else { // API response status code not 200

            return $response->body();
            DB::table('tb_error_logs')->insert([
                'platform' => 'ONLINE_INTERNET_BANKING',
                'user_id' => 'AUTH',
                'code' => $response->status(),
                'message' => $response->body()
            ]);

            return $base_response->api_response('500', 'API SERVER ERROR',  NULL); // return API BASERESPONSE

        }
    }
}