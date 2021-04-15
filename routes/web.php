<?php

use App\Http\Controllers\AccountEnquiry\AccountEnquiryController;
use App\Http\Controllers\AccountEnquiry\GetAccountDescription;
use App\Http\Controllers\AccountServices\accountCreationController;
use App\Http\Controllers\AccountServices\AccountServicesController;
use App\Http\Controllers\AccountServices\ChequeBookRequestController as AccountServicesChequeBookRequestController;
use App\Http\Controllers\API\Transfer\LocalBankController as APITransferLocalBankController;
use App\Http\Controllers\API\Transfer\OwnAccountController as TransferOwnAccountController;
use App\Http\Controllers\API\Transfer\SameBankController as APITransferSameBankController;
use App\Http\Controllers\Authentication\ForgotPasswordController;
use App\Http\Controllers\Authentication\LoginController as AuthenticationLoginController;
use App\Http\Controllers\Authentication\ResetPasswordController;
use App\Http\Controllers\BENEFICIARY\Transfer\InternationalBankController;
use App\Http\Controllers\BENEFICIARY\Transfer\LocalBankController as TransferLocalBankController;
use App\Http\Controllers\BENEFICIARY\Transfer\SameBankController as TransferSameBankController;
use App\Http\Controllers\Branch\BranchesController;
use App\Http\Controllers\BranchLocator\branchLocatorController;
use App\Http\Controllers\Budgeting\SpendingStaticsController;
use App\Http\Controllers\Cards\CardsController;
use App\Http\Controllers\Chatbot\FacebookChatbotController;
use App\Http\Controllers\Chatbot\InstagramChatbotController;
use App\Http\Controllers\Chatbot\WhatsAppChatbotController;
use App\Http\Controllers\Cheques\ChequeBookRequestController;
use App\Http\Controllers\Cheques\ChequesApprovedController;
use App\Http\Controllers\Cheques\ChequesPendingController;
use App\Http\Controllers\Cheques\ChequesRejectedController;
use App\Http\Controllers\Corporate\Approvals\PendingController;
use App\Http\Controllers\Corporate\Approvals\ApprovedController;
use App\Http\Controllers\Corporate\Approvals\RejectedController;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Enquiry\EnquiryController;
use App\Http\Controllers\FAQ\FAQController;
use App\Http\Controllers\GeneralFunctions\FunctionsController;
use App\Http\Controllers\Loan\LoansController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MaileController;
use App\Http\Controllers\Payments\BulkUpload\BulkUploadsController;
use App\Http\Controllers\Payments\MobileMoneyController;
use App\Http\Controllers\Payments\paymentController;
use App\Http\Controllers\Settings\settingsController;
use App\Http\Controllers\Start\LandingPageController;
use App\Http\Controllers\TradeFinance\TradeFinanceController;
use App\Http\Controllers\transferController;
use App\Http\Controllers\Transfers\LocalBankController;
use App\Http\Controllers\Transfers\MultipleTransfersController;
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

Route::post('/login', [AuthenticationLoginController::class, 'login_'])->name('login');

Route::get('/login', [AuthenticationLoginController::class, 'login'])->name('login');
// Route::post('/login', [AuthenticationLoginController::class, 'login_'])->name('login');

//route to control the forgot-password screen for email
Route::get('/forgot-password', [ForgotPasswordController::class, 'email_reset_password'])->name('forgot-password');

//Route to control the change-password screen
Route::get('/change-password', [ResetPasswordController::class, 'change_password'])->name('change-password');


Route::get('/reset-password', [loginController::class, 'reset_password'])->name('reset-password');

Route::get('/forget-password', [loginController::class, 'forget_password'])->name('forget-password');


//Route to control the reset-success screen
Route::get('/reset-success', [ResetPasswordController::class, 'reset_success'])->name('reset-success');
// Transfer Routes
// Route::get('/transfer', [transferController::class, 'transfer'])->name('transfer');
Route::get('/add-beneficiary', [transferController::class, 'add_beneficiary'])->name('add-beneficiary');
Route::get('/add-beneficiary/own-account-beneficiary', [transferController::class, 'own_account_beneficiary'])->name('own-account-beneficiary');
Route::get('/add-same-bank-beneficiary', [transferController::class, 'same_bank_beneficiary'])->name('same-bank-beneficiary');

Route::get('/add-local-bank-beneficiary', [transferController::class, 'local_bank'])->name('local-bank-beneficiary');
Route::get('/add-international-bank-beneficiary', [transferController::class, 'international_bank'])->name('international-bank-beneficiary');

Route::get('/beneficiary-list', [transferController::class, 'beneficiary_list'])->name('beneficiary-list');

// OWN ACCOUNT
Route::get('/own-account', [OwnAccountController::class, 'own_account'])->name('own-account');
Route::get('/get-my-accounts', [TransferOwnAccountController::class, 'get_my_accounts'])->name('get-my-accounts');
Route::post('/own-account-api', [TransferOwnAccountController::class, 'own_account_transfer'])->name('own-account-api');


Route::post('/submit-own-account-transfer', [OwnAccountController::class, 'submit_own_account_transfer'])->name('submit-own-account-transfer');

// SAME ACCOUNT
// Route::get('/same-bank', [SameBankController::class, 'same_bank'])->name('same-bank');


// MULTIPLE TRANSFERS
Route::get('/multiple-transfers', [MultipleTransfersController::class, 'index'])->name('multiple-transfers');


// LOCAL BANK
Route::get('/other-local-bank', [LocalBankController::class, 'other_local_bank'])->name('other-local-bank');


//international bank transfer
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



// SAVED BENEFICIARY UTILITY
Route::get('/saved-beneficiary/utility-payment', [paymentController::class, 'utility_payment'])->name('saved-beneficiary/utility-payment');


// ONE TIME
Route::get('/one-time-payment', [paymentController::class, 'one_time'])->name('one-time-payment');

//  CORPORATE ROUTE
Route::get('/approvals-pending', [PendingController::class, 'approvals_pending'])->name('approvals-pending');
Route::get('/approvals-pending-transfer-details', [PendingController::class, 'approvals_pending_transfer_details'])->name('approvals-pending-transfer-details');


// BRANCH LOCATOR LIST VIEW
Route::get('branch-locator', [branchLocatorController::class, 'branch_locator'])->name('branch-locator');

// ACCOUNT CREATION
Route::get('/account-creation', [accountCreationController::class, 'account_creation'])->name('account-creation');
Route::get('/account-creation/savings-account-creation', [accountCreationController::class, 'savings_account_creation'])->name('account-creation/savings-account-creation');

// BRANCHES
Route::get('/branches', [BranchesController::class, 'branches'])->name('branches');
// FAQ
Route::get('/faq', [FAQController::class, 'index'])->name('faq');

// ENQUIRY
Route::get('/enquiry', [EnquiryController::class, 'index'])->name('enquiry');


// LOAN
Route::get('/loan-quotation', [LoansController::class, 'loans'])->name('loan-quotation');


// SETTINGS
Route::get('/settings', [settingsController::class, 'settings'])->name('settings');


// Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');


//route to control the accountEnquiry screen
Route::get('account-enquiry', [AccountEnquiryController::class, 'account_enquiry'])->name('account-enquiry');

// get account description
Route::post('get-account-description', [GetAccountDescription::class, 'get_account_description'])->name('get-account-description');

//route to control the coperate approval screen
Route::get('approvals-approved', [ApprovedController::class, 'approvals_approved'])->name('approvals-approved');

//route to control the coperate rejected screen
Route::get('approvals-rejected', [RejectedController::class, 'approvals_rejected'])->name('approvals-rejected');

//route to return the cheque approvals screen for pending
Route::get('cheque-approvals-pending', [ChequesPendingController::class, 'pending_cheques'])->name('cheque-approvals-pending');

//route to control the cheques approved screen
Route::get('cheque-approvals-approved', [ChequesApprovedController::class, 'cheques_approved'])->name('cheque-approval-approved');

//route to control the cheques rejected screen
Route::get('cheque-approvals-rejected', [ChequesRejectedController::class, 'cheques_rejected'])->name('cheques-approvals-rejected');

//route to display the airtime payment screen
Route::get('airtime-payment', [paymentController::class, 'airtime_payment'])->name('airtime-payment');

//route to display the bulk upload payment screen
Route::get('bulk-upload-payment', [paymentController::class, 'bulk_upload_payment'])->name('bulk-upload-payment');

//route to take import of the bulk upload payment screen
Route::post('bulkupload.import', [BulkUploadsController::class, 'import'])->name('bulkupload.import');

//route to display the cardless payment screen
Route::get('cardless-payment', [paymentController::class, 'cardless_payment'])->name('cardless-payment');

//route to display the korpone loane payment screen
Route::get('korpone-loane-payment', [paymentController::class, 'korpone_loane_payment'])->name('korpone-loane-payment');

//route to display order blink payment screen
Route::get('order-blink-payment', [paymentController::class, 'order_blink_payment'])->name('order-blink-payment');

//route to display the pay again payment screen
Route::get('pay-again', [paymentController::class, 'pay_again_payment'])->name('pay-again');

//route to display the qr payment screen
Route::get('qr-payment', [paymentController::class, 'qr_payment'])->name('qr-payment');

//route to display the request blink payment screen
Route::get('request-blink', [paymentController::class, 'request_blink_payment'])->name('request-blink');

//route to display the schedule payment screen
Route::get('schedule-payment', [paymentController::class, 'schedule_payment'])->name('schedule-payment');

//route to display the activate cheque screen
Route::get('activate-cheque-book', [AccountServicesController::class, 'activate_cheque_book'])->name('activate-cheque-book');

//route to display the add signature screen
Route::get('add-signature', [AccountServicesController::class, 'add_signature'])->name('add-signature');

//route to display the activate cheque screen
Route::get('cheque-book-request', [AccountServicesController::class, 'cheque_book_request'])->name('cheque-book-request');

//route to display the confirm cheque screen
Route::get('confirm-cheque', [AccountServicesController::class, 'confirm_cheque'])->name('confirm-cheque');

//route to display the fd creation screen
Route::get('fd-creation', [AccountServicesController::class, 'fd_creation'])->name('fd-creation');

//route to display the kyc update screen
Route::get('kyc-update', [AccountServicesController::class, 'kyc_update'])->name('kyc-update');

//route to display the open additional acc screen
Route::get('open-additional-account', [AccountServicesController::class, 'open_additional_acc'])->name('open-additional-account');

//route to display the request atm screen
Route::get('request-atm', [AccountServicesController::class, 'request_atm'])->name('request-atm');

//route to display the remove signature screen
Route::get('remove-signature', [AccountServicesController::class, 'remove_signature'])->name('remove-signature');

//route to display the request draft screen
Route::get('request-draft', [AccountServicesController::class, 'request_draft'])->name('request-draft');

//route to display the request statement screen
Route::get('request-statement', [AccountServicesController::class, 'request_statement'])->name('request-statement');

//route to display the request for letter screen
Route::get('request-for-letter', [AccountServicesController::class, 'request_for_letter'])->name('request-for-letter');

//route to display the close account
Route::get('close-account', [AccountServicesController::class, 'close_account'])->name('close-account');

//route to display the stop cheque screen
Route::get('stop-cheque', [AccountServicesController::class, 'stop_cheque'])->name('stop-cheque');

//route to display the activate card screen
Route::get('activate-card', [CardsController::class, 'activate_card'])->name('activate-card');

//route to display the block debit card screen
Route::get('block-debit-card', [CardsController::class, 'block_debit_card'])->name('block-debit-card');

//route to display the replace card screen
Route::get('replace-card', [CardsController::class, 'replace_card'])->name('replace-card');

//route to display the stop fd screen
Route::get('stop-fd', [AccountServicesController::class, 'stop_fd'])->name('stop-fd');

//route to display the biometric setup screen
Route::get('biometric-setup', [settingsController::class, 'biometric_setup'])->name('biometric-setup');

//route to display the change pin screen
Route::get('change-pin', [settingsController::class, 'change_pin'])->name('change-pin');

//route to display the forgot transaction pin screen
Route::get('set-transaction-limit', [settingsController::class, 'set_transaction_limit'])->name('set-transaction-limit');

//route to display the update company info screen
Route::get('update-company-info', [settingsController::class, 'update_company_info'])->name('update-company-info');

//route to display the forgot transaction pin screen
Route::get('forgot-transaction-pin', [settingsController::class, 'forgot_transaction_pin'])->name('forgot-transaction-pin');

//route to display the lc origination of the trade finance screen
Route::get('lc-origination', [TradeFinanceController::class, 'lc_origination'])->name('lc-origination');

//route to display the spending statics screen for budgetting
Route::get('budgeting-spending-statics', [SpendingStaticsController::class, 'spending_statics'])->name('budgeting-spending-statics');

//route to display the whatsapp chatbook screen
Route::get('WhatsApp-Chatbot', [WhatsAppChatbotController::class, 'whatsApp_chatbot'])->name('WhatsApp-Chatbot');

//route to display the facebook chatbot screen
Route::get('Facebook-Chatbot', [FacebookChatbotController::class, 'facebook_chatbot'])->name('Facebook-Chatbot');

//route to display the instagram chatbot screen
Route::get('Instagram-Chatbot', [InstagramChatbotController::class, 'instagram_chatbot'])->name('Instagram-Chatbot');

Route::middleware(['userAuth'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/same-bank', [SameBankController::class, 'same_bank'])->name('same-bank');
    // Logout controller


});

Route::get('/logout', [LogoutController::class, 'logout_'])->name('logout');

Route::get('/send-email', [MaileController::class, 'send_email'])->name('send-email');

// GENERAL FUNCTIONS
Route::get('get-currency-list-api', [FunctionsController::class, 'currency_list'])->name('get-currency-list-api');


// >>>>>>>>>>>>>>>>>>>>>>>>> API ROUTES <<<<<<<<<<<<<<<<<<<<<<<<<<

// Transfers
Route::post('/transfer-to-beneficiary-api', [APITransferSameBankController::class, 'transfer_to_beneficiary'])->name('transfer-to-beneficiary-api');
Route::post('/transfer-to-beneficiary-api', [APITransferSameBankController::class, 'one_time_beneficiary'])->name('transfer-to-beneficiary-api');
Route::get('/get-my-account', [APITransferSameBankController::class, 'beneficiary_payment_from_account'])->name('get-my-account');
Route::get('/get-same-bank-beneficiary', [APITransferSameBankController::class, 'beneficiary_payment_to_account'])->name('get-same-bank-beneficiary');


// Transfers Add Beneficiary
Route::post('/same-bank-beneficiary-api', [TransferSameBankController::class, 'same_bank_beneficiary_'])->name('same-bank-beneficiary-api');
Route::post('add-local-bank-beneficiary-api', [TransferLocalBankController::class, 'local_bank'])->name('add-local-bank-beneficiary-api');
Route::get('get-local-bank-beneficiary-api', [TransferLocalBankController::class, 'currency_list'])->name('get-local-bank-beneficiary-api');


Route::post('international-bank-beneficiary-api', [InternationalBankController::class, 'international_bank_'])->name('international-bank-beneficiary-api');
Route::post('international-bank-transfer-beneficiary-api', [APITransferLocalBankController::class, 'international_bank_transfer_beneficiary'])->name('international-bank-transfer-beneficiary-api');
Route::post('international-bank-onetime-api', [APITransferLocalBankController::class, 'international_bank_onetime_transfer'])->name('international-bank-onetime-api');

//route for cheque book request api
Route::get('cheque-book-request-2',[AccountServicesChequeBookRequestController::class,'cheque_book_request'])->name('cheque-book-request-2');

//route for atm card
// Route::get('request-atm-card',[]);
