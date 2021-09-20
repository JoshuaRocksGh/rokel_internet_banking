<?php

namespace App\Http\Controllers\AccountCreation;

use App\Http\classes\API\BaseResponse;
use App\Http\classes\WEB\ApiBaseResponse;
use App\Http\Controllers\Controller;
use DateTime;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class SavingsAccountCreationController extends Controller
{
    //
    public function savings_account_creation(Request $request)
    {
        $validator = Validator::make($request->all(), [

            "title" =>  'required',
            "surname" =>  'required',
            "firstname" =>  'required',
            "othername" =>  'required',
            "gender" =>  'required',
            "birthday" =>  'required',
            "birth_place" =>  'required',
            "country" =>  'required',
            "residence_status" =>  'required',
            "mobile_number" =>  'required',
            "email" =>  'required',
            "city" =>  'required',
            "town" =>  'required',
            "residential_address" =>  'required',
            "id_type" =>  'required',
            "id_number" =>  'required',
            "tin_number" =>  'required',
            "issue_date" =>  'required',
            "expiry_date" =>  'required',
            "id_image" =>  'required',
            "passport_picture" =>  'required',
            "signed_selfie_paper" => 'required',
            "proof_of_address" => 'required'
        ]);

        // return $request;

        $base_response = new BaseResponse();

        //VALIDATION
        if ($validator->fails()) {

            return $base_response->api_response('500', $validator->errors(), "");
        };



        $authToken = session()->get('userToken');
        $userID = session()->get('userId');

        // return $request;



        $passport_picture_ = $request->passport_picture;
        $passport_picture_1 = explode(',', $passport_picture_);
        $passport_picture = $passport_picture_1[1];
        // return response()->json([
        //     "message" => $passport_picture_
        // ]);


        $signed_selfie_paper_ = $request->signed_selfie_paper;
        $proof_of_address_1 = explode(',', $signed_selfie_paper_);
        $signed_selfie_paper = $proof_of_address_1[1];


        // $passport_picture_ = explode(',', $request->passport_picture);
        // $signed_selfie_paper_ = explode(',', $$request->signed_selfie_paper);

        $proof_of_address_ = $request->proof_of_address;
        $proof_of_address_1 = explode(',', $proof_of_address_);
        $proof_of_address = $proof_of_address_1[1];


        // $id_image = ltrim($request->id_image, "data:image/png;base64,");
        // $passport_picture = ltrim($request->passport_picture, "data:image/png;base64,");
        // $signed_selfie_paper = ltrim($request->signed_selfie_paper, "data:image/png;base64,");
        // $proof_of_address = ltrim($request->proof_of_address, "data:image/png;base64,");
        $now = new DateTime();
        $date = $now->format('Y-m-d');
        $api_headers = session()->get('headers');

        $data = [

            "city" => $request->city,
            "companyName" => null,
            "constitutionCode" => null,
            "corporateTin" => null,
            "createdAccountNumber" => null,
            "createdCustomerNumber" => null,
            "custCategory" => "ID",
            "custType" => "I",
            "dateOfIncorporation" => $date,
            "docRef" => '400',
            "domicileCountry" => $request->country,
            "entrySource" => "WEB",
            "fingerPrint" => null,
            "kycDoc" => "WEB",
            "mandate" => "SELF TO SIGN",
            "natureOfBusiness" => null,
            "noCrTrans" => '1',
            "noDbTrans" => '1',
            "occupation" => null,
            "postedBy" => $request->firstname . " " . $request->surname,
            "preferredLanguage" => null,
            "proofOfAddress" => 'proof_of_address',
            "reason" => null,
            "relationDetails" => [

                "approvalPanel" => null,
                "countryOfResidence" => $request->country,
                "dob" => $request->birthday,
                "documentExpiry" => $request->expiry_date,
                "documentId" => $request->id_number,
                "documentType" => $request->id_type,
                "email" => $request->email,
                "firstName" => $request->firstname,
                "homeAddress" => $request->town,
                "homeAddress1" => $request->residential_address,
                "issueAuthority" => $request->issueAuthority,
                "issueDate" => $request->issue_date,
                "lastName" => $request->surname,
                "nationality" => $request->country,
                "otherName" => $request->othername,
                "personalPhone" => $request->mobile_number,
                "picture" => 'passport_picture',
                "placeOfBirth" => $request->birth_place,
                "sex" => $request->gender,
                "signature" => 'signed_selfie_paper',
                "staffCategory" => 'N',
                "suffix" => 'stg',
                "tin" => $request->tin_number,
                "title" => $request->title,
                "workAddress" => 'sng'

            ],

            "relationshipManagerCode" => '1204',
            "residenceStatus" => $request->residence_status,
            "rfId" => null,
            "riskCode" => null,
            "sourceOfFunds" => null,
            "sourceOfWorth" => null,
            "subProduct" => '220',
            "subSector" => '9901',
            "subSegment" => '1001',
            "terminal" => "WEB",
            "totalCrTrans" => '1',
            "totalDbTrans" => '1',
            "userBranch" => '001',
            "userName" => "BANKOWNER",
            "userId" => "WEB USER",
            "worthValue" => null,
            // "idImage" => $id_image,
            // "signedPaper" => $signed_selfie_paper,

            // "town" => $request->town

        ];



        return $data;

        try {

            // dd((env('API_BASE_URL') . "account/openAccountNew"));

            $response = Http::withHeaders($api_headers)->post(env('API_BASE_URL') . "account/openAccountNew", $data);

            // return response()->json([
            //     'message' => $response
            // ]);

            // dd($response);
            $result = new ApiBaseResponse();
            return $result->api_response($response);
            // return json_decode($response->body();

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