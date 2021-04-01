<?php

namespace App\Http\Controllers\BENEFICIARY\Transfer;

use App\Http\classes\API\BaseResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class InternationalBankController extends Controller
{
    //
    public function international_bank_( Request $req)
    {
        $validator = Validator::make($req->all(),[
            'bank_country' => 'required' ,
            'bank_city' => 'required' ,
            'bank_branch' => 'required' ,
            'bank_name' => 'required' ,
            'bank_address' => 'required',
            'swift_code' => 'required' ,
            'acc_number' => 'required' ,
            'currency' => 'required' ,
            'firstname' => 'required' ,
            'lastname' => 'required' ,
            'middlename' => 'required' ,
            'beneficiary_name' => 'required' ,
            'beneficiary_email' => 'required' ,
            'nationality' => 'required' ,
            'residence' => 'required' ,
            'city' => 'required' ,
            'address' => 'required' ,
        ]);

        // return $req;

        $base_response = new BaseResponse();


        // VALIDATION
        if ($validator->fails()) {

            return $base_response->api_response('500', $validator->errors(), NULL);

        };
        // return $req;

        $bank_country = $req->bank_country;
        $bank_city = $req->bank_city;
        $bank_branch = $req->bank_branch;
        $bank_name = $req->bank_name;
        $bank_address = $req->bank_address;
        $swift_code = $req->swift_code;
        $acc_number = $req->acc_number;
        $currency = $req->currency;
        $firstname = $req->firstname;
        $lastname = $req->lastname;
        $middlename = $req->middlename;
        $beneficiary_name = $req->beneficiary_name;
        $beneficiary_email = $req->beneficiary_email;
        $nationality = $req->nationality;
        $residence = $req->residence;
        $city = $req->city;
        $address = $req->address;

        try{
            $response = Http::post('http://localhost/laravel/internet_banking/IIE/international-bank-beneficiary.php',[

                'bank_country' => $bank_country ,
                'bank_city' => $bank_city ,
                'bank_branch' => $bank_branch ,
                'bank_name' => $bank_name ,
                'bank_address' => $bank_address,
                'swift_code' => $swift_code ,
                'acc_number' => $acc_number ,
                'currency' => $currency ,
                'firstname' => $firstname ,
                'lastname' => $lastname ,
                'middlename' => $middlename ,
                'beneficiary_name' => $beneficiary_name ,
                'beneficiary_email' => $beneficiary_email ,
                'nationality' => $nationality ,
                'residence' => $residence ,
                'city' => $city ,
                'address' => $address ,
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
