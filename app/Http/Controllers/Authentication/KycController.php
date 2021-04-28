<?php

namespace App\Http\Controllers\Authentication;

use App\Http\classes\API\BaseResponse;
use App\Http\classes\WEB\ApiBaseResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class KycController extends Controller
{
    public function submit_kyc(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'customer_number' => 'required',
            'title' => 'required',
            'firstname' => 'required',
            'surname' => 'required',
            'Othername' => 'required',
            'telephone_number' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'marital_status' => 'required',
            'number_of_children' => 'required',
            'number_of_dependents' => 'required' ,
            'nationality' => 'required',
            'id_type' => 'required',
            'id_number' => 'required',
            'date_of_issue' => 'required',
            'date_of_expiry' => 'required',
            'mother_maiden_name' => 'required',
            'next_of_kin_name' => 'required',
            'next_of_kin_address' => 'required',
            'next_of_kin_telephone' => 'required',
            'country_of_residence' => 'required',
            'years_at_residence' => 'required',
            'city' => 'required',
            'town' => 'required',
            'residential_address' => 'required',
            'postal_address' => 'required',
            'employment_type' => 'required',
            'employee_number' => 'required',
            'employee_code' => 'required',
            'department' => 'required',
            'date_of_employment' => 'required',
            'last_update_date' => 'required',
            'tax_identification_number' => 'required',
            'us_citizen' => 'required',
            'resident' => 'required',
            'prove_of_address' => 'required'

        ]);

        // return $request;

        $base_response = new BaseResponse();


        // VALIDATION
        if ($validator->fails()) {

            return $base_response->api_response('500', $validator->errors(), NULL);
        };
        // return $req;

        //return $user;
        $authToken = session()->get('userToken');
        $userID = session()->get('userId');

        // return $userID ;
        // $firstname = $request->firstname;

        $data = [
            "accountSign" => null,
            "authToken" => $authToken,
            "buildingName" => null,
            "contactMethod" => null,
            "customerNumber" => $request->customer_number,
            "dateOfBirth" => $request->date_of_birth,
            "department" => $request->department,
            "emailAddress" => $request->email_address,
            "employedSince" => $request->date_of_employment,
            "employmentCode" => $request->employee_code,
            "employmentNumber" => $request->employee_number,
            "employmentType" => $request->employment_type,
            "entrySource" => null,
            "firstName" => $request->firstname,
            "gender" => $request->gender,
            "gps" => null,
            "idExpiryDAte" => $request->date_of_expiry,
            "idIssueDate" => $request->date_of_issue,
            "idIssuedAt" => null,
            "idType" => $request->id_type,
            "lastTaxUpdatedDate" => $request->last_update_date,
            "location" => null,
            "maritalStatus" => $request->marital_status,
            "mobile1" => $request->telephone_number,
            "mobile2" => null,
            "motherMaidenName" => $request->mother_maiden_name,
            "nationality" => $request->nationality,
            "nextOfKin" => $request->next_of_kin_name,
            "nextOfKinAddress" => $request->next_of_kin_address,
            "nextOfKinPhone" => $request->next_of_kin_telephone,
            "numberOfChildren" => $request->number_of_children,
            "numberOfDependants" => $request->number_of_dependents,
            "otherCompany" => null,
            "otherName" => $request->Othername,
            "photo" => null,
            "postalAddress" => $request->postal_address,
            "proofAddressDocId" => $request->prove_of_address,
            "relationNumber" => null,
            "residenceCountry" => $request->country_of_residence,
            "residenceOfCountry" => null,
            "residenceYears" => $request->years_at_residence,
            "residentialAddress" => $request->residential_address,
            "salutation" => null,
            "streetName" => null,
            "surname" => $request->surname,
            "tin" => $request->tax_identification_number,
            "title" => $request->title,
            "usPermanentVisaCard" => $request->us_citizen,
            "usResident" => $request->resident
        ];



        // $response = Http::post(env('API_BASE_URL') . "$userID/kycInfo", $data);

        // $result = new ApiBaseResponse();
        // return $result->api_response($response);

        // return $data;

        try {
            $response = Http::post(env('API_BASE_URL') . "user/kycInfo", $data);

            // return json_decode($response->body());
            $result = new ApiBaseResponse();
            return $result->api_response($response);
        } catch (\Exception $e) {

            DB::table('tb_error_logs')->insert([
                'platform' => 'ONLINE_INTERNET_BANKING',
                'user_id' => 'AUTH',
                'message' => (string) $e->getMessage()
            ]);

            return $base_response->api_response('500', $e->getMessage(),  NULL); // return API BASERESPONSE


        }
    }
}
