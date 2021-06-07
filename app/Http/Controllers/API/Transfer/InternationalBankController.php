<?php

namespace App\Http\Controllers\API\Transfer;

use App\Http\classes\API\BaseResponse;
use App\Http\classes\WEB\UserAuth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class InternationalBankController extends Controller
{
    //

    public function international_bank_transfer(Request $request){
        $validator = Validator::make($request->all(), [

        ]);


        // return $request;

        $base_response = new BaseResponse();



        // VALIDATION
        if ($validator->fails()) {

            return $base_response->api_response('500', $validator->errors(), NULL);
        };
        // return $req;


        $user = (object) UserAuth::getDetails();
        //return $user;

        $authToken = session()->get('userToken');
        $userID = session()->get('userId');

        $data = [

        ];


        try {
            $response = Http::post(env('API_BASE_URL') . " ", $data);

            //return $response;
            // return json_decode($response->body());

            if ($response->ok()) { // API response status code is 200

                $result = json_decode($response->body());
                //return $result;

                if ($result->responseCode == '000') {

                    // $result_data = $result->data;
                    // return $result_data;

                    return $base_response->api_response($result->responseCode, $result->message,  $result->data); // return API BASERESPONSE



                } else {  // API responseCode is not 000

                    return $base_response->api_response($result->responseCode, $result->message,  $result->data); // return API BASERESPONSE

                }
            } else { // API response status code not 200

                DB::table('tb_error_logs')->insert([
                    'platform' => 'ONLINE_INTERNET_BANKING',
                    'user_id' => 'AUTH',
                    'code' => $response->status(),
                    'message' => $response->body()
                ]);

                return $base_response->api_response('500', 'API SERVER ERROR',  NULL); // return API BASERESPONSE

            }
        }catch (\Exception $e) {

            DB::table('tb_error_logs')->insert([
                'platform' => 'ONLINE_INTERNET_BANKING',
                'user_id' => 'AUTH',
                'message' => (string) $e->getMessage()
            ]);

            return $base_response->api_response('500', $e->getMessage(),  NULL); // return API BASERESPONSE


        }


    }
}
