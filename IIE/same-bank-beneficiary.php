<?php

header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json; charset=UTF-8");
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");



$response = [
    'responseCode' => '000',
    'message' => 'Beneficiary Added Successfully',
    'data' => [
        'account_number' => '0001212362' ,
        'account_name' => 'Joshua Tetteh' ,
        'beneficiary_name' => 'Joshua Tetteh',
        'beneficairy_email' => 'josh.tetteh@gmail.com',
        'send_mail' => 'Yes',
        'f_login' => 'Y',
        'c_type' => 'I'
    ]
];
    exit(json_encode($response));