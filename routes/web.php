<?php

use App\Http\Controllers\AccountServices\accountCreationController;
use App\Http\Controllers\Authentication\LoginController as AuthenticationLoginController;
use App\Http\Controllers\Branch\BranchesController;
use App\Http\Controllers\BranchLocator\branchLocatorController;
use App\Http\Controllers\Corporate\Approvals\PendingController;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Enquiry\EnquiryController;
use App\Http\Controllers\FAQ\FAQController;
use App\Http\Controllers\Loan\LoansController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\Payments\MobileMoneyController;
use App\Http\Controllers\Payments\paymentController;
use App\Http\Controllers\Settings\settingsController;
use App\Http\Controllers\Start\LandingPageController;
use App\Http\Controllers\transferController;
use App\Http\Controllers\Transfers\LocalBankController;
use App\Http\Controllers\Transfers\OwnAccountController;
use App\Http\Controllers\Transfers\SameBankController;
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
Route::get('/own-account', [OwnAccountController::class, 'own_account'])->name('own-account');
Route::post('/submit-own-account-transfer', [OwnAccountController::class, 'submit_own_account_transfer'])->name('submit-own-account-transfer');

// SAME ACCOUNT
Route::get('/same-bank', [SameBankController::class, 'same_bank'])->name('same-bank');


// LOCAL BANK
Route::get('/other-local-bank', [LocalBankController::class, 'other_local_bank'])->name('other-local-bank');



Route::get('/international-bank', [transferController::class, 'international_bank_'])->name('international-bank');


// PAYMENTS ROUTES
Route::get('/mobile-money', [MobileMoneyController::class, 'index'])->name('mobile-money');
Route::get('/payment-add-beneficiary', [paymentController::class, 'add_beneficiary'])->name('payment-add-beneficiary');
Route::get('/payment-add-beneficiary/mobile-money-beneficiary', [paymentController::class, 'mobile_money_beneficiary'])->name('mobile-money-beneficiary');
Route::get('/payment-add-beneficiary/utility-payment-beneficiary', [paymentController::class, 'utility_payment_beneficiary'])->name('utility-payment-beneficiary');

// SAVED BENEFICIARY
Route::get('/saved-beneficiary', [paymentController::class, 'saved_beneficiary'])->name('saved-beneficiary');

// PAYMENT ROUTES


// SAVED BENEFICIARY MOBILE MONEY
Route::get('/saved-beneficiary/mobile-money-payment', [paymentController::class, 'mobile_money_payment'])->name('saved-beneficiary-mobile-money-payment');

// SAVED BENEFICIARY AIRTIME


// SAVED BENEFICIARY UTILITY
Route::get('/saved-beneficiary/utility-payment', [paymentController::class, 'utility_payment'])->name('saved-beneficiary/utility-payment');


// ONE TIME
Route::get('/one-time-payment', [paymentController::class, 'one_time'])->name('one-time-payment');

//  CORPORATE ROUTE
Route::get('/approvals-pending', [PendingController::class, 'approvals_pending'])->name('approvals-pending');
Route::get('/approvals-pending-transfer-details', [PendingController::class, 'approvals_pending_transfer_details'])->name('approvals-pending-transfer-details');


// BRANCH LOCATOR LIST VIEW
Route::get('branch-locator',[branchLocatorController::class,'branch_locator'])->name('branch-locator');

// ACCOUNT CREATION
Route::get('/account-creation',[accountCreationController::class,'account_creation'])->name('account-creation');
Route::get('/account-creation/savings-account-creation',[accountCreationController::class,'savings_account_creation'])->name('account-creation/savings-account-creation');

// BRANCHES
Route::get('/branches',[BranchesController::class,'branches'])->name('branches');
// FAQ
Route::get('/faq',[FAQController::class,'index'])->name('faq');
// ENQUIRY
Route::get('/enquiry',[EnquiryController::class,'index'])->name('enquiry');


// LOAN
Route::get('/loan-quotation',[LoansController::class,'loans'])->name('loan-quotation');


// SETTINGS
Route::get('/settings',[settingsController::class,'settings'])->name('settings');


// Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


