<?php

use App\Http\Controllers\Authentication\LoginController as AuthenticationLoginController;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\Start\LandingPageController;
use App\Http\Controllers\transferController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LandingPageController::class, 'index'])->name('starter');

Route::get('/login', [AuthenticationLoginController::class, 'login'])->name('login');

Route::get('/reset-password', [loginController::class, 'reset_password'])->name('reset-password');

Route::get('/forget-password', [loginController::class, 'forget_password'])->name('forget-password');


// Transfer Routes
// Route::get('/transfer', [transferController::class, 'transfer'])->name('transfer');
Route::get('/add-beneficiary', [transferController::class, 'add_beneficiary'])->name('add-beneficiary');
Route::get('/add-beneficiary/own-account-beneficiary', [transferController::class, 'own_account_beneficiary'])->name('own-account-beneficiary');
Route::get('/add-beneficiary/same-bank-beneficiary', [transferController::class, 'same_bank_beneficiary'])->name('same-bank-beneficiary');
Route::get('/add-beneficiary/local-bank-beneficiary', [transferController::class, 'local_bank'])->name('local-bank-beneficiary');
Route::get('/add-beneficiary/international-bank-beneficiary', [transferController::class, 'international_bank'])->name('international-bank-beneficiary');


// OWN ACCOUNT
Route::get('/own-account', [transferController::class, 'own_account'])->name('own-account');
Route::post('/submit-own-account-transfer', [transferController::class, 'submit_own_account_transfer'])->name('submit-own-account-transfer');



Route::get('/same-bank', [transferController::class, 'same_bank'])->name('same-bank');
Route::get('/other-local-bank', [transferController::class, 'other_local_bank'])->name('other-local-bank');
Route::get('/international-bank', [transferController::class, 'international_bank_'])->name('international-bank');










// Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
