<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\classes\API\BaseResponse;
use App\Http\classes\WEB\ApiBaseResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.dashboard.home');
    }


    public function get_accounts(){
        // return 'kjsdf';


        $authToken = session()->get('userToken');
        $userID = session()->get('userId');

        $base_response = new BaseResponse();

        $data = [
            "authToken" => $authToken,
            "userId"    => $userID
        ];
        // return $data;
        // return env('API_BASE_URL') ."account/getAccounts";

        $response = Http::post(env('API_BASE_URL') ."account/getAccounts", $data);

        // return $response;
        // return $response->status();
        $result = new ApiBaseResponse();
        return $result->api_response($response);

    }

    public function get_expenses(){
        $authToken = session()->get('userToken');
        $userID = session()->get('userId');

        $base_response = new BaseResponse();

        $data = [
            "authToken" => $authToken,
            "userId"    => $userID
        ];
        // return $data;
        // return env('API_BASE_URL') ."account/getAccounts";

        // $response = Http::post(env('API_BASE_URL') ."account/getAccounts", $data);


        // return $response;
        // return $response->status();
        // $result = new ApiBaseResponse();
        // return $result->api_response($response);
        return $data;die;
        return [
            'responseCode' => '000',
            'message' => 'spending analysis',
            'data' => [
            'travel' => '200',
            'vendor payment' => '100',
            'petty cash' => '300',
            'salary' => '900',
            'groceries' => '50',
            'medical'=>'50',
            'insurance'=>'950',
            'tax'=>'95',
            'others'=>'40']
        ];
    }


}
