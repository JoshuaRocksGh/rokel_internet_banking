<?php

namespace App\Http\Controllers\Authentication;

use App\Http\classes\WEB\ApiBaseResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KycController extends Controller
{
    public function submit_kyc(Request $request)
    {
        $data = [
            "accountSign" => "string",
            "authToken" => "string",
            "buildingName" => "string",
            "contactMethod" => "string",
            "customerNumber" => "string",
            "dateOfBirth" => "string",
            "department" => "string",
            "emailAddress" => "string",
            "employedSince" => "string",
            "employmentCode" => "string",
            "employmentNumber" => "string",
            "employmentType" => "string",
            "entrySource" => "string",
            "firstName" => "string",
            "gender" => "string",
            "gps" => "string",
            "idExpiryDAte" => "string",
            "idIssueDate" => "string",
            "idIssuedAt" => "string",
            "idType" => "string",
            "lastTaxUpdatedDate" => "string",
            "location" => "string",
            "maritalStatus" => "string",
            "mobile1" => "string",
            "mobile2" => "string",
            "motherMaidenName" => "string",
            "nationality" => "string",
            "nextOfKin" => "string",
            "nextOfKinAddress" => "string",
            "nextOfKinPhone" => "string",
            "numberOfChildren" => "string",
            "numberOfDependants" => "string",
            "otherCompany" => "string",
            "otherName" => "string",
            "photo" => "string",
            "postalAddress" => "string",
            "proofAddressDocId" => "string",
            "relationNumber" => "string",
            "residenceCountry" => "string",
            "residenceOfCountry" => "string",
            "residenceYears" => "string",
            "residentialAddress" => "string",
            "salutation" => "string",
            "streetName" => "string",
            "surname" => "string",
            "tin" => "string",
            "title" => "string",
            "usPermanentVisaCard" => "string",
            "usResident" => "string"
        ];



        $response = Http::post(env('API_BASE_URL') . "user/kycInfo", $data);

        $result = new ApiBaseResponse();
        return $result->api_response($response);
    }
}