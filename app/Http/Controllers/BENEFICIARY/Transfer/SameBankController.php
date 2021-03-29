<?php

namespace App\Http\Controllers\BENEFICIARY\Transfer;

use App\Http\classes\API\BaseResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class SameBankController extends Controller
{
    //

    public function same_bank_benefiaciary_(Request $req){
        $validator = Validator::make($req->all(),[
            'account_number' => 'required' ,
            'account_name' => 'required' ,
            'beneficiary_name' => 'required',
            'beneficairy_email' => 'required',
            'send_mail' => 'required',

        ]);

        // return $req;

        $base_response = new BaseResponse();


        // VALIDATION
        if ($validator->fails()) {

            return $base_response->api_response('500', $validator->errors(), NULL);

        };

        // return $req;

        try{
            $response = Http::post('http://localhost/IIE/same-bank-beneficiary.php',[
                'account_number' => 'required' ,
                'account_name' => 'required',
                'beneficiary_name' => 'required',
                'beneficairy_email' => 'required',
                'send_mail' => 'required',
            ]);

            // return json_decode($response->body());

            if($response->ok()){ // API response status code is 200

                $result = json_decode($response->body());
                // return $result;

                if($result->responseCode == '000'){

                    // $result_data = $result->data;
                    // return $result_data;

                    return $base_response->api_response($result->responseCode, $result->message,  $result->data); // return API BASERESPONSE



                } else {  // API responseCode is not 000

                return $base_response->api_response($result->responseCode, $result->message,  $result->data); // return API BASERESPONSE

                }

            } else { // API response status code not 200

                DB::table('error_logs')->insert([
                    'platform' => 'ONLINE_INTERNET_BANKING',
                    'user_id' => 'AUTH',
                    'code' => $response->status(),
                    'message' => $response->body()
                ]);

                return $base_response->api_response('500', 'API SERVER ERROR',  NULL); // return API BASERESPONSE

            }

        }catch(\Exception $e){

            DB::table('error_logs')->insert([
                'platform' => 'ONLINE_INTERNET_BANKING',
                'user_id' => 'AUTH',
                'message' => (string) $e->getMessage()
            ]);

            return $base_response->api_response('500', $e->getMessage(),  NULL); // return API BASERESPONSE


        }
    }
}
