<?php

namespace App\Http\Controllers\AccountCreation;

use App\Http\classes\API\BaseResponse;
use App\Http\classes\WEB\ApiBaseResponse;
use App\Http\Controllers\Controller;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class SavingsAccountCreationController extends Controller
{
    //
    public function savings_account_creation(Request $request)
    {
        $validator = Validator::make($request->all(),[

            "title" =>  'required' ,
            "surname" =>  'required' ,
            "firstname" =>  'required' ,
            "gender" =>  'required' ,
            "birthday" =>  'required' ,
            "birth_place" =>  'required' ,
            "country" =>  'required' ,
            "mobile_number" =>  'required' ,
            "email" =>  'required' ,
            "city" =>  'required' ,
            "town" =>  'required' ,
            "residential_address" =>  'required' ,
            "id_type" =>  'required' ,
            "id_number" =>  'required' ,
            "issue_date" =>  'required' ,
            "expiry_date" =>  'required' ,
            "id_iamge" =>  'required' ,
            "passport_picture" =>  'required' ,
            "signed_selfie_paper" => 'required'
        ]);

        // return $request ;

        $base_response = new BaseResponse();

        // VALIDATION
        if ($validator->fails()) {

            return $base_response->api_response('500', $validator->errors(), NULL);
        };

        // $authToken = session()->get('userToken');
        // $userID = session()->get('userId');


        $data = [

                "city" => $request->city,
                "companyName" => null,
                "constitutionCode" => null,
                "corporateTin" => null,
                "createdAccountNumber" => null,
                "createdCustomerNumber" => null,
                "custCategory" => null,
                "custType" => null,
                "dateOfIncorporation" => null,
                "docRef" => null,
                "domicileCountry" => null,
                "fingerPrint" => null,
                "kycDoc" => null,
                "mandate" => null,
                "natureOfBusiness" => null,
                "noCrTrans" => null,
                "noDbTrans" => null,
                "occupation" => null,
                "postedBy" => null,
                "preferredLanguage" => null,
                "proofOfAddress" => null,
                "reason" => null,
                "relationDetails" =>

                [

                    "approvalPanel" => null,
                    "countryOfResidence" => $request->country,
                    "dob" => $request->birthday,
                    "documentExpiry" => $request->expiry_date,
                    "documentId" => $request->id_type,
                    "documentType" => null,
                    "email" => $request->email,
                    "firstName" => $request->firstname,
                    "homeAddress" => $request->residential_address,
                    "homeAddress1" => null,
                    "issueAuthority" => null,
                    "issueDate" => $request->issue_date,
                    "lastName" => $request->surname,
                    "nationality" => $request->country,
                    "otherName" => "string",
                    "personalPhone" => $request->mobile_number,
                    "picture" => $request->passport_picture,
                    "placeOfBirth" => $request->birth_place,
                    "sex" => $request->gender,
                    "signature" => null,
                    "staffCategory" => null,
                    "suffix" => null,
                    "tin" => null,
                    "title" => $request->title,
                    "workAddress" => "string"

                ],

                "relationshipManagerCode" => null,
                "residenceStatus" => null,
                "rfId" => null,
                "riskCode" => null,
                "sourceOfFunds" => null,
                "sourceOfWorth" => null,
                "subProduct" => null,
                "subSector" => null,
                "subSegment" => null,
                "terminal" => null,
                "totalCrTrans" => null,
                "totalDbTrans" => null,
                "userBranch" => null,
                "worthValue" => null,
                "idImage" => $request->id_iamge,
                "signedPaper" => $request->signed_selfie_paper ,

                "town" => $request->town

        ];

        // return $data ;

        $response = [
            "responseCode" => "000" ,
            "message" => "Account Successfully Created",

        ];

        return $response;
        try {

            $response = Http::post(env('API_BASE_URL') . "/account/openAccount", $data);

            $result = new ApiBaseResponse();
            return $result->api_response($response);
            // return json_decode($response->body();

        } catch (\Exception $e) {

            DB::table('error_logs')->insert([
                'platform' => 'ONLINE_INTERNET_BANKING',
                'user_id' => 'AUTH',
                'message' => (string) $e->getMessage()
            ]);

            return $base_response->api_response('500', $e->getMessage(),  NULL); // return API BASERESPONSE


        }
    }
}
