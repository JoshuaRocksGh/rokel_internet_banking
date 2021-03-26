<?php

use App\Http\Controllers\API\Authentication\LoginController;
use App\Http\Controllers\API\Authentication\TransferController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login',[LoginController::class,'login_'])->name('login');
Route::post('/add-beneficiary/same-bank-beneficiary',[TransferController::class,'same_bank_beneficiary_'])->name('same-bank-beneficiary');

// Savings Account Creation 


