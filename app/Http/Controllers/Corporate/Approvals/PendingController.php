<?php

namespace App\Http\Controllers\Corporate\Approvals;

use App\Http\classes\API\BaseResponse;
use App\Http\classes\WEB\ApiBaseResponse;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

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

        // Alert::error('', 'Not Authorized To Approve Pending Request');
        // return back();
        // $error = alert()->error('ErrorAlert','Lorem ipsum dolor sit amet.');

        // return $errorMessage ;

        if ($mandate == 'A') {

            return view('pages.corporate.approvals.pending_transfer_details', [ 'request_id'=> $request_id, 'customer_no'=> $customer_no , 'mandate' => $mandate]);

        }else {
            Alert::error('', 'Not Authorized To Approve Pending Request');
            return back();
        }
    }


        public function pending_request_details(Request $request) {


            // return ('hello');

        $validator = Validator::make($request->all(), [
            'customer_no' => 'required' ,
            'request_id' => 'required'

        ]);

        $customer_no = $request->query('customer_no');
        $request_id = $request->query('request_id');

        $base_response = new BaseResponse();

        // if ($validator->fails()) {

        //     return $base_response->api_response('500', $validator->errors(), NULL);
        // };
        // return $request;

        $authToken = session()->get('userToken');
        $userID = session()->get('userId');

        $data = [
            "customer_no" => $customer_no ,
            "request_id" => $request_id

        ];

        // return $data ;
        try {

            $response = Http::get("localhost/laravel/cib_api/public/api/get-detail-pending-request-api", $data);

            // return $response;

            $result = new ApiBaseResponse();
            return $result->api_response($response);

        } catch (\Exception $e) {

            DB::table('tb_error_logs')->insert([
                'platform' => 'ONLINE_INTERNET_BANKING',
                'user_id' => 'AUTH',
                'message' => (string) $e->getMessage()
            ]);

            return $base_response->api_response('500', "Internal Server Error",  NULL); // return API BASERESPONSE


        }

    }
}
