<?php

use App\Http\Controllers\AccountCreation\SavingsAccountCreationController;
use App\Http\Controllers\AccountEnquiry\AccountEnquiryController;
use App\Http\Controllers\AccountEnquiry\GetAccountDescription;
use App\Http\Controllers\AccountServices\accountCreationController;
use App\Http\Controllers\AccountServices\AccountServicesController;
use App\Http\Controllers\AccountServices\AtmCardRequestController;
use App\Http\Controllers\AccountServices\ChequeBookRequestController as AccountServicesChequeBookRequestController;
use App\Http\Controllers\AccountServices\ComplaintController;
use App\Http\Controllers\AccountServices\KYC\KycController as KYCKycController;
use App\Http\Controllers\AccountServices\StatementRequestController;
use App\Http\Controllers\AccountServices\StopChequeController;
use App\Http\Controllers\API\Transfer\InternationalBankController as TransferInternationalBankController;
use App\Http\Controllers\API\Transfer\LocalBankController as APITransferLocalBankController;
use App\Http\Controllers\API\Transfer\OwnAccountController as TransferOwnAccountController;
use App\Http\Controllers\API\Transfer\SameBankController as APITransferSameBankController;
use App\Http\Controllers\Authentication\ForgotPasswordController;
use App\Http\Controllers\Authentication\KycController;
use App\Http\Controllers\Authentication\LoginController as AuthenticationLoginController;
use App\Http\Controllers\Authentication\ResetPasswordController;
use App\Http\Controllers\BENEFICIARY\Payment\AirtimePaymentController;
use App\Http\Controllers\BENEFICIARY\Payment\MobileMoneyBeneficiaryController;
use App\Http\Controllers\BENEFICIARY\Payment\MobileMoneyController as PaymentMobileMoneyController;
use App\Http\Controllers\BENEFICIARY\Payment\PaymentTypesController;
use App\Http\Controllers\BENEFICIARY\Transfer\DeleteBeneficiaryController;
use App\Http\Controllers\BENEFICIARY\Transfer\EditBeneficiaryController;
use App\Http\Controllers\BENEFICIARY\Transfer\EditLocalBankController;
use App\Http\Controllers\BENEFICIARY\Transfer\EditSameBankController;
use App\Http\Controllers\BENEFICIARY\Transfer\InternationalBankController;
use App\Http\Controllers\BENEFICIARY\Transfer\LocalBankController as TransferLocalBankController;
use App\Http\Controllers\BENEFICIARY\Transfer\SameBankController as TransferSameBankController;
use App\Http\Controllers\Branch\BranchesController;
use App\Http\Controllers\BranchLocator\branchLocatorController;
use App\Http\Controllers\Budgeting\SpendingStaticsController;
use App\Http\Controllers\BulkUpload\CorporateKorporController;
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
use App\Http\Controllers\Corporate\Approvals\ApprovedRequestController;
use App\Http\Controllers\Corporate\Approvals\RejectedController;
use App\Http\Controllers\Corporate\GeneralFunctions\FunctionsController as GeneralFunctionsFunctionsController;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Enquiry\EnquiryController;
use App\Http\Controllers\FAQ\FAQController;
use App\Http\Controllers\FixedDeposit\FixedDepositAccountController;
use App\Http\Controllers\GeneralFunctions\FunctionsController;
use App\Http\Controllers\Loan\LoanProductsController;
use App\Http\Controllers\Loan\LoanRequestController;
use App\Http\Controllers\Loan\LoanQuotationController;
use App\Http\Controllers\Loan\LoansController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MaileController;
use App\Http\Controllers\Payments\Bulk\BulkKorporController;
use App\Http\Controllers\Payments\BulkUpload\BulkUploadsController;
use App\Http\Controllers\Payments\BulkUpload\CorporateKorporController as BulkUploadCorporateKorporController;
use App\Http\Controllers\Payments\CardlessController;
use App\Http\Controllers\Payments\KorporController;
use App\Http\Controllers\Payments\MobileMoneyController;
use App\Http\Controllers\Payments\paymentController;
use App\Http\Controllers\Settings\ChangePasswordController;
use App\Http\Controllers\Settings\ChangePinController;
use App\Http\Controllers\Settings\settingsController;
use App\Http\Controllers\Start\LandingPageController;
use App\Http\Controllers\TradeFinance\TradeFinanceController;
use App\Http\Controllers\transferController;
use App\Http\Controllers\Transfers\BulkUpload\BulkUploadsController as BulkUploadBulkUploadsController;
use App\Http\Controllers\Transfers\LocalBankController;
use App\Http\Controllers\Transfers\MultipleTransfersController;
use App\Http\Controllers\Transfers\OwnAccountController;
use App\Http\Controllers\Transfers\QR\GenerateQRController;
use App\Http\Controllers\Transfers\SameBankController;
use App\Http\Controllers\Transfers\SchedulePayment\SchedulePaymentController;
use App\Http\Controllers\Transfers\StandingOrderController;
use App\Http\Controllers\TransferStatus\TransferStatusController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SelfEnrollController;
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

Route::get('/', [AuthenticationLoginController::class, 'login'])->name('login');

Route::post('/login', [AuthenticationLoginController::class, 'login_'])->name('login');

Route::get('/login', [AuthenticationLoginController::class, 'login'])->name('login');

Route::get('/self_enroll', [AuthenticationLoginController::class, 'self_enroll'])->name('self_enroll');
Route::post('/validate-customer', [SelfEnrollController::class, 'validateCustomer'])->name('validate-customer');
Route::post('/confirm-customer', [SelfEnrollController::class, 'confirmCustomer'])->name('confirm-customer');
Route::post('/register-customer', [SelfEnrollController::class, 'registerCustomer'])->name('register-customer');


// Route::get('/logout', [AuthenticationLoginController::class, 'logout'])->name('logout');

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
Route::get('/add-beneficiary/own-account-beneficiary', [transferController::class, 'own_account_beneficiary'])->name('own-account-beneficiary');



// OWN ACCOUNT
Route::get('/get-my-account', [TransferOwnAccountController::class, 'get_my_accounts'])->name('get-my-account');
Route::post('/own-account-api', [TransferOwnAccountController::class, 'own_account_transfer'])->name('own-account-api');

//CORPORATE OWN ACCOUNT API
Route::post('/corporate-own-account-api', [TransferOwnAccountController::class, 'corporate_own_account_transfer'])->name('corporate-own-account-api');
Route::post('/corporate-same-bank-api', [SameBankController::class, 'corporate_same_bank'])->name('corporate-same-bank-api');
Route::post('/corporate-saved-local-bank-transfer-api', [APITransferLocalBankController::class, 'corporate_saved_beneficiary'])->name('corporate-saved-local-bank-transfer-api');
Route::post('/corporate-onetime-local-bank-transfer-api', [APITransferLocalBankController::class, 'corporate_onetime_beneficiary'])->name('corporate-onetime-local-bank-transfer-api');
// Route::post('/corporate-same-bank-api', [SameBankController::class, 'corporate_same_bank'])->name('corporate-same-bank-api');


//Standing order page

Route::post('/submit-own-account-transfer', [OwnAccountController::class, 'submit_own_account_transfer'])->name('submit-own-account-transfer');

// SAME ACCOUNT
// Route::get('/same-bank', [SameBankController::class, 'same_bank'])->name('same-bank');


// MULTIPLE TRANSFERS
Route::get('/multiple-transfers', [MultipleTransfersController::class, 'index'])->name('multiple-transfers');


// QR TRANSFERS

// BULK TRANSFERS
Route::post('/upload_', [BulkUploadBulkUploadsController::class, 'upload_'])->name('upload_');

Route::get('/download_same_bank_file', [BulkUploadBulkUploadsController::class, 'download_same_bank'])->name('download-same-bank-file');
Route::get('/download_other_bank_file', [BulkUploadBulkUploadsController::class, 'download_other_bank'])->name('download-other-bank-file');
Route::get('/view-bulk-transfer', [BulkUploadBulkUploadsController::class, 'view_bulk_transfer'])->name('view-bulk-transfer');
Route::get('/get-bulk-upload-list-api', [BulkUploadBulkUploadsController::class, 'get_bulk_upload_list'])->name('get-bulk-upload-list-api');
Route::get('/get-bulk-upload-detail-list-api', [BulkUploadBulkUploadsController::class, 'get_bulk_upload_file_details'])->name('get-bulk-upload-detail-list-api');
Route::get('/post-bulk-transaction-api', [BulkUploadBulkUploadsController::class, 'post_bulk_transaction'])->name('post-bulk-transaction-api');
Route::get('/reject-bulk-transaction-api', [BulkUploadBulkUploadsController::class, 'reject_bulk_transaction'])->name('reject-bulk-transaction-api');


Route::post('/get-bulk-detail-list-for-approval', [PendingController::class, 'get_bulk_detail_list_for_approval'])->name('get-bulk-detail-list-for-approval');



// LOCAL BANK
Route::get('/other-local-bank', [LocalBankController::class, 'other_local_bank'])->name('other-local-bank');
Route::get('/local-bank', [LocalBankController::class, 'rtgs'])->name('local-bank');
// Route::get('/local-bank_', [LocalBankController::class, 'rtgs_'])->name('local-bank_');
Route::get('/ach', [LocalBankController::class, 'ach'])->name('ach');


//international bank transfer


// PAYMENTS ROUTES
Route::get('/payment-add-beneficiary', [paymentController::class, 'add_beneficiary'])->name('payment-add-beneficiary');
Route::get('/payment-add-beneficiary/mobile-money-beneficiary', [paymentController::class, 'mobile_money_beneficiary'])->name('mobile-money-beneficiary');
Route::get('/payment-add-beneficiary/utility-payment-beneficiary', [paymentController::class, 'utility_payment_beneficiary'])->name('utility-payment-beneficiary');

//route for cardless payment
Route::post('/initiate-cardless', [CardlessController::class, 'initiate_cardless'])->name('initiate-cardless');
Route::post('/cardless-otp', [CardlessController::class, 'cardless_otp'])->name('cardless-otp');
Route::post('/redeem-cardless', [CardlessController::class, 'redeem_cardless'])->name('redeem-cardless');
Route::post('/redeemed-cardless', [CardlessController::class, 'send_redeemed_request'])->name('redeemed-cardless');

//route for korpor payment
Route::post('/initiate-korpor', [KorporController::class, 'initiate_korpor'])->name('initiate-korpor');
Route::post('/korpor-otp', [KorporController::class, 'korpor_otp'])->name('korpor-otp');
Route::post('/redeem-korpor', [KorporController::class, 'redeem_korpor'])->name('redeem-korpor');
Route::post('/redeemed-korpor', [KorporController::class, 'send_redeemed_request'])->name('redeemed-korpor');

// Route ofr corporate korpor payment
Route::post('/corporate-initiate-korpor', [BulkUploadCorporateKorporController::class, 'corporate_initiate_korpor'])->name('corporate-initiate-korpor');

Route::post('corporate-reverse-korpor', [BulkUploadCorporateKorporController::class, 'corporate_reverse_korpor'])->name('corporate-reverse-korpor');



// Bulk ekorpor
Route::get('/bulk-korpor_detail', [KorporController::class, 'bulk_korpor_detail'])->name('bulk-korpor_detail');
Route::get('/get-bulk-korpor-upload-list-api', [BulkKorporController::class, 'get_bulk_korpor_upload_list'])->name('get-bulk-korpor-upload-list-api');
Route::get('/get-bulk-korpor-upload-detail-list-api', [BulkKorporController::class, 'get_bulk_korpor_upload_detail_list'])->name('get-bulk-korpor-upload-detail-list-api');
Route::post('/update-korpor-upload-detail-list-api', [BulkKorporController::class, 'update_bulk_korpor_upload_detail_list'])->name('update-korpor-upload-detail-list-api');




Route::post('/submit-kyc', [KycController::class, 'submit_kyc'])->name('submit-kyc');


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
// Route::get('/approved-transaction', [PendingController::class, 'approved_transaction'])->name('approved-transaction');

// Route::get('/approvals-pending/{request_id}/{customer_no}', [PendingController::class, 'approvals_pending'])->name('approvals-pending/request_id/customer_no');
Route::get('/get-pending-requests', [GeneralFunctionsFunctionsController::class, 'get_pending_requests'])->name('get-pending-requests');
Route::get('/approvals-pending-transfer-details', [PendingController::class, 'approvals_pending_transfer_details'])->name('approvals-pending-transfer-details');
Route::get('/approvals-pending-transfer-details/{request_id}/{customer_no}', [PendingController::class, 'approvals_pending_transfer_details'])->name('approvals-pending-transfer-details/{request_id}/{customer_no}');
Route::get('/pending-request-details-api', [PendingController::class, 'pending_request_details'])->name('pending-request-details-api');
Route::post('/approved-pending-request', [ApprovedRequestController::class, 'approved_request'])->name('approved-pending-request');
Route::post('/reject-pending-request', [ApprovedRequestController::class, 'reject_request'])->name('reject-pending-request');


// BRANCH LOCATOR LIST VIEW
Route::get('get-branches-api', [branchLocatorController::class, 'get_branches_api'])->name('get-branches-api');

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

//loan request


// SETTINGS
Route::get('/settings', [settingsController::class, 'settings'])->name('settings');


// TRANSFER STATUS
Route::get('/transfer-status', [TransferStatusController::class, 'transfer_status'])->name('transfer-status');


// Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');


//route to control the accountEnquiry screen
Route::get('print-account-statement', [AccountEnquiryController::class, 'print_account_statement'])->name('print-account-statement');
Route::get('print-account-statement-history', [AccountEnquiryController::class, 'print_account_statement_history'])->name('print-account-statement-history');

Route::post('account-transaction-history', [AccountEnquiryController::class, 'account_transaction_history'])->name('account-transaction-history');
Route::get('list-of-accounts', [AccountEnquiryController::class, 'list_of_accounts'])->name('list-of-accounts');

// get account description
Route::post('get-account-description', [GetAccountDescription::class, 'get_account_description'])->name('get-account-description');
Route::post('validate-account-no', [FunctionsController::class, 'validate_account_no'])->name('validate-account-no');


//route to take import of the bulk upload payment screen
Route::post('bulkupload.import', [BulkUploadsController::class, 'import'])->name('bulkupload.import');

//route to display the cardless payment screen

//route to display the korpone loane payment screen
// Route::get('korpone-loane-payment', [paymentController::class, 'korpone_loane_payment'])->name('korpone-loane-payment');

//route to display order blink payment screen

//route to display the pay again payment screen
Route::get('pay-again', [paymentController::class, 'pay_again_payment'])->name('pay-again');

//route to display the qr payment screen
Route::get('qr-payment', [paymentController::class, 'qr_payment'])->name('qr-payment');

//route to hit for complaint api
Route::post('complaint-api', [ComplaintController::class, 'make_complaint_api'])->name('complaint-api');

//route to hit for forex request api
Route::get('currency-converter', [transferController::class, 'forex_request'])->name('currency-converter');

//route to display the activate card screen

//route to display the block debit card screen
Route::get('manage-cards', [CardsController::class, 'block_debit_card'])->name('manage-cards');

//route to display the replace card screen
Route::get('replace-card', [CardsController::class, 'replace_card'])->name('replace-card');

//route to display the stop fd screen

//route to display the biometric setup screen
Route::get('biometric-setup', [settingsController::class, 'biometric_setup'])->name('biometric-setup');

//route to display the change pin screen


//route to display the create originator screen

//route to hit the create originator endpoint
Route::post('create-originator-api', [settingsController::class, 'create_originator_api'])->name('create-originator-api');

// display the update company info screen

//route to display the forgot transaction pin screen//route to hit the set transaction limits endpoint
Route::get('set-transaction-limits-api', [settingsController::class, 'set_transaction_limits_api'])->name('set-transaction-limits-api');

//route to hit the set transaction limits endpoint
Route::get('set-transaction-limits-api', [settingsController::class, 'set_transaction_limits_api'])->name('set-transaction-limits-api');


//route to display the whatsapp chatbook screen
Route::get('WhatsApp-Chatbot', [WhatsAppChatbotController::class, 'whatsApp_chatbot'])->name('WhatsApp-Chatbot');

//route to display the facebook chatbot screen
Route::get('Facebook-Chatbot', [FacebookChatbotController::class, 'facebook_chatbot'])->name('Facebook-Chatbot');

//route to display the instagram chatbot screen
Route::get('Instagram-Chatbot', [InstagramChatbotController::class, 'instagram_chatbot'])->name('Instagram-Chatbot');

// Route::middleware(['userAuth'])->group(function () {

// });

Route::group(['middleware' => ['userAuth']], function () {

    //DashBoard Screen
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // Account Enquiry Screens
    Route::get('account-enquiry', [AccountEnquiryController::class, 'account_enquiry'])->name('account-enquiry');

    Route::get('request-statement', [AccountServicesController::class, 'request_statement'])->name('request-statement');

    Route::get('close-account', [AccountServicesController::class, 'close_account'])->name('close-account');

    Route::get('budgeting-spending-statics', [SpendingStaticsController::class, 'spending_statics'])->name('budgeting-spending-statics');

    //Tranfer Screens
    Route::get('/own-account', [OwnAccountController::class, 'own_account'])->name('own-account');

    Route::get('/same-bank', [SameBankController::class, 'same_bank'])->name('same-bank');

    Route::get('/bulk-transfer', [BulkUploadBulkUploadsController::class, 'index'])->name('bulk-transfer');

    Route::get('/international-bank', [transferController::class, 'international_bank_'])->name('international-bank');

    Route::get('standing-order', [StandingOrderController::class, 'display_standing_order'])->name('standing-order');

    //Add Beneficiary
    Route::get('/add-beneficiary', [transferController::class, 'add_beneficiary'])->name('add-beneficiary');

    Route::get('/add-same-bank-beneficiary', [transferController::class, 'same_bank_beneficiary'])->name('add-same-bank-beneficiary');

    Route::get('/add-local-bank-beneficiary', [transferController::class, 'local_bank'])->name('add-local-bank-beneficiary');

    Route::get('/add-international-bank-beneficiary', [transferController::class, 'international_bank'])->name('add-international-bank-beneficiary');

    Route::get('/beneficiary-list', [transferController::class, 'beneficiary_list'])->name('beneficiary-list');

    Route::get('/edit-same-bank-beneficiary', [TransferSameBankController::class, 'edit_same_bank_beneficiary'])->name('edit-same-bank-beneficiary');

    // Route::delete('/delete-beneficiary', [transferController::class, "delete_beneficiary"])->name('delete-beneficiary');


    //DELETE BENEFICIARY
    Route::get('/delete-beneficiary', [DeleteBeneficiaryController::class, 'index'])->name('delete-beneficiary');

    // Payment Screens
    Route::get('/payment-type', [PaymentTypesController::class, 'index'])->name('payment-type');

    Route::get('/payment-type/{payment_type_code}', [PaymentTypesController::class, 'paymentTypes'])->name('/payment-type/{payment_type_code}');

    Route::get('/mobile-money', [MobileMoneyController::class, 'index'])->name('mobile-money');

    Route::get('/qr-transfer', [GenerateQRController::class, 'index'])->name('qr-transfer');

    Route::get('airtime-payment', [paymentController::class, 'airtime_payment'])->name('airtime-payment');

    Route::get('cardless-payment', [paymentController::class, 'cardless_payment'])->name('cardless-payment');

    Route::get('e-korpor', [paymentController::class, 'e_korpor'])->name('e-korpor');

    Route::get('/bulk-korpor', [KorporController::class, 'bulk_korpor'])->name('bulk-korpor');

    Route::get('/utility-payment', [paymentController::class, 'utilities'])->name('utility-payment');

    Route::get('schedule-payment', [paymentController::class, 'schedule_payment'])->name('schedule-payment');

    Route::get('bulk-upload-payment', [paymentController::class, 'bulk_upload_payment'])->name('bulk-upload-payment');

    Route::get('request-blink', [paymentController::class, 'request_blink_payment'])->name('request-blink');

    Route::get('order-blink-payment', [paymentController::class, 'order_blink_payment'])->name('order-blink-payment');

    Route::get('payment-beneficiary', [paymentController::class, 'payment_beneficiary_list'])->name('payment-beneficiary');

    Route::get('payment-beneficiary-list', [paymentController::class, 'beneficiary_list'])->name('payment-beneficiary-list');


    // Route::get('payment-beneficiary?beneficiary_type={payment_type_code}', [PaymentTypesController::class, 'add_beneficiary'])->name('payment-beneficiary?beneficiary_type={payment_type_code}');



    // Loan Screens
    Route::get('/loan-quotation', [LoansController::class, 'loan_request'])->name('loan-quotation');

    Route::get('/loan-request', [LoansController::class, 'loan_request'])->name('loan-request');



    // Investment Screens
    Route::get('fd-creation', [AccountServicesController::class, 'fd_creation'])->name('fd-creation');

    Route::get('stop-fd', [AccountServicesController::class, 'stop_fd'])->name('stop-fd');


    // Trade Finance
    Route::get('lc-origination', [TradeFinanceController::class, 'lc_origination'])->name('lc-origination');



    //Account Services Screens
    Route::get('cheque-book-request', [AccountServicesController::class, 'cheque_book_request'])->name('cheque-book-request');

    Route::get('confirm-cheque', [AccountServicesController::class, 'confirm_cheque'])->name('confirm-cheque');

    Route::get('activate-cheque-book', [AccountServicesController::class, 'activate_cheque_book'])->name('activate-cheque-book');

    Route::get('cheque-approvals-pending', [ChequesPendingController::class, 'pending_cheques'])->name('cheque-approvals-pending');

    Route::get('cheque-approvals-approved', [ChequesApprovedController::class, 'cheques_approved'])->name('cheque-approval-approved');

    Route::get('cheque-approvals-rejected', [ChequesRejectedController::class, 'cheques_rejected'])->name('cheques-approvals-rejected');

    Route::get('stop-cheque', [AccountServicesController::class, 'stop_cheque'])->name('stop-cheque');

    Route::get('request-atm', [AccountServicesController::class, 'request_atm'])->name('request-atm');

    Route::get('activate-card', [CardsController::class, 'activate_card'])->name('activate-card');

    Route::get('request-for-letter', [AccountServicesController::class, 'request_for_letter'])->name('request-for-letter');

    Route::get('open-additional-account', [AccountServicesController::class, 'open_additional_acc'])->name('open-additional-account');

    Route::get('request-draft', [AccountServicesController::class, 'request_draft'])->name('request-draft');

    Route::get('add-signature', [AccountServicesController::class, 'add_signature'])->name('add-signature');

    Route::get('remove-signature', [AccountServicesController::class, 'remove_signature'])->name('remove-signature');

    Route::get('kyc-update', [AccountServicesController::class, 'kyc_update'])->name('kyc-update');

    Route::get('complaint', [AccountServicesController::class, 'make_complaint'])->name('complaint');

    Route::get('/approvals-pending', [PendingController::class, 'approvals_pending'])->name('approvals-pending');

    Route::get('approvals-approved', [ApprovedController::class, 'approvals_approved'])->name('approvals-approved');

    Route::get('approvals-rejected', [RejectedController::class, 'approvals_rejected'])->name('approvals-rejected');


    //Settings Screens
    Route::get('create-originator', [settingsController::class, 'create_originator'])->name('create-originator');

    Route::get('update-company-info', [settingsController::class, 'update_company_info'])->name('update-company-info');

    Route::get('forgot-transaction-pin', [settingsController::class, 'forgot_transaction_pin'])->name('forgot-transaction-pin');

    Route::get('change-pin', [settingsController::class, 'change_pin'])->name('change-pin');

    Route::get('branch-locator', [branchLocatorController::class, 'branch_locator'])->name('branch-locator');
});


// Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/get-expenses', [HomeController::class, 'get_expenses'])->name('get-expenses');
// Logout controller


Route::get('/logout', [LogoutController::class, 'logout_'])->name('logout');

Route::get('/send-email', [MaileController::class, 'send_email'])->name('send-email');

// GENERAL FUNCTIONS
Route::get('get-currency-list-api', [FunctionsController::class, 'currency_list'])->name('get-currency-list-api');
Route::get('get-bank-list-api', [FunctionsController::class, 'bank_list'])->name('get-bank-list-api');
Route::get('get-bank-branches-list-api', [FunctionsController::class, 'branches_list'])->name('get-bank-branches-list-api');
Route::get('get-security-question-api', [FunctionsController::class, 'security_question'])->name('get-security-question-api');
Route::get('get-accounts-api', [FunctionsController::class, 'get_accounts'])->name('get-accounts-api');
Route::get('get-expenses', [FunctionsController::class, 'get_expenses'])->name('get-expenses');
Route::post('get-transaction-fees', [FunctionsController::class, 'get_transaction_fees'])->name('get-transaction-fees');
Route::get('get-loan-accounts-api', [FunctionsController::class, 'get_my_loans_accounts'])->name('get-loan-accounts-api');
Route::get('get-fx-rate-api', [FunctionsController::class, 'get_fx_rate'])->name('get-fx-rate-api');
Route::get('get-correct-fx-rate-api', [FunctionsController::class, 'get_correct_fx_rate'])->name('get-correct-fx-rate-api');
Route::get('get-lovs-list-api', [FunctionsController::class, 'lovs_list'])->name('get-lovs-list-api');
Route::get('get-payment-types-api', [FunctionsController::class, 'payment_types'])->name('get-payment-types-api');



// >>>>>>>>>>>>>>>>>>>>>>>>> API ROUTES <<<<<<<<<<<<<<<<<<<<<<<<<<

// Transfers
Route::get('/get-transfer-beneficiary-api', [FunctionsController::class, 'get_transfer_beneficiary'])->name('get-transfer-beneficiary-api');
Route::post('/transfer-to-beneficiary-api', [SameBankController::class, 'transfer_to_beneficiary'])->name('transfer-to-beneficiary-api');
Route::post('/transfer-to-same-bank-beneficiary-onetime-api', [SameBankController::class, 'one_time_beneficiary'])->name('transfer-to-same-bank-beneficiary-onetime-api');
Route::get('/get-my-account', [APITransferSameBankController::class, 'beneficiary_payment_from_account'])->name('get-my-account');
Route::get('/get-same-bank-beneficiary', [APITransferSameBankController::class, 'beneficiary_payment_to_account'])->name('get-same-bank-beneficiary');
// Route::get('standing-order',[])

// OTHER LOCAL BANK
Route::post('/saved-beneficiary-local-bank-transfer-api', [APITransferLocalBankController::class, 'saved_beneficiary_transfer'])->name('saved-beneficiary-local-bank-transfer-api');
Route::post('/onetime-beneficiary-local-bank-api', [APITransferLocalBankController::class, 'onetime_beneficiary_transfer'])->name('onetime-beneficiary-local-bank-api');

// INTERNATIONAL BANK TRANSFER
Route::post('/international-bank-transfer-api', [TransferInternationalBankController::class, 'international_bank_transfer'])->name('international-bank-transfer-api');


// // Transfers Add Beneficiary
// Route::post('/same-bank-beneficiary-api', [TransferSameBankController::class, 'same_bank_beneficiary_'])->name('same-bank-beneficiary-api');
// Route::post('add-local-bank-beneficiary-api', [TransferLocalBankController::class, 'local_bank'])->name('add-local-bank-beneficiary-api');
// Route::get('get-local-bank-beneficiary-api', [TransferLocalBankController::class, 'currency_list'])->name('get-local-bank-beneficiary-api');

// Transfers Add Beneficiary
Route::post('/same-bank-beneficiary-api', [TransferSameBankController::class, 'same_bank_beneficiary_'])->name('same-bank-beneficiary-api');
Route::post('add-local-bank-beneficiary-api', [TransferLocalBankController::class, 'local_bank'])->name('add-local-bank-beneficiary-api');
Route::get('get-local-bank-beneficiary-api', [TransferLocalBankController::class, 'currency_list'])->name('get-local-bank-beneficiary-api');

// EDIT BENEFICIARY
Route::get('/edit-beneficiary', [EditBeneficiaryController::class, 'index'])->name('edit-beneficiary');


Route::post('/edit-same-bank-api', [EditSameBankController::class, 'get_same_bank_beneficiary'])->name('edit-same-bank-api');
Route::put('/edit-same-bank-beneficiary-api', [EditSameBankController::class, 'update_same_bank_beneficiary'])->name('edit-same-bank-beneficiary-api');
// -------- OTHER LOCAL BANK -----------
Route::get('/edit-other-local-bank-beneficiary', [TransferLocalBankController::class, 'edit_local_bank_beneficiary'])->name('edit-other-local-bank-beneficiary');
Route::post('/edit-local-bank-api', [EditLocalBankController::class, 'update_local_bank_beneficiary'])->name('edit-local-bank-api');
// -------- INTENATIONAL BANK -----------
Route::get('/edit-international-bank-beneficiary', [InternationalBankController::class, 'edit_international_bank_beneficiary'])->name('edit-international-bank-beneficiary');
// EDIT BENEFICIARY DATA
Route::get('/all-beneficiary-list', [transferController::class, 'all_beneficiary_list'])->name('all-beneficiary-list');
Route::put('edit-local-bank-beneficiary-api', [TransferLocalBankController::class, 'edit_local_bank'])->name('edit-local-bank-beneficiary-api');


//=======ADD PAYMENT BENEFICARY
Route::post('add-mobile-money-beneficiary-api', [MobileMoneyBeneficiaryController::class, 'add_mobile_money_beneficary'])->name('add-mobile-money-beneficiary-api');

//=======EDIT PAYMENT BENEFICARY
Route::get('payment-beneficiary-list-api', [paymentController::class, 'all_paymentbeneficiary_list'])->name('payment-beneficiary-list-api');

Route::post('international-bank-beneficiary-api', [InternationalBankController::class, 'international_bank_'])->name('international-bank-beneficiary-api');
Route::post('international-bank-transfer-beneficiary-api', [APITransferLocalBankController::class, 'international_bank_transfer_beneficiary'])->name('international-bank-transfer-beneficiary-api');
Route::post('international-bank-onetime-api', [APITransferLocalBankController::class, 'international_bank_onetime_transfer'])->name('international-bank-onetime-api');

// PAYMENT API'S
Route::post('mobile-money-api', [PaymentMobileMoneyController::class, 'mobile_money'])->name('mobile-money-api');
Route::post('airtime-payment-api', [AirtimePaymentController::class, 'airtime_payment'])->name('airtime-payment-api');
Route::post('schedule-payment-api', [SchedulePaymentController::class, 'schedule_payment'])->name('schedule-payment-api');

//route for cheque book request api
Route::get('cheque-book-request-api', [AccountServicesChequeBookRequestController::class, 'cheque_book_request'])->name('cheque-book-request-api');
Route::post('submit-cheque-book-request', [AccountServicesChequeBookRequestController::class, 'cheque_book_request'])->name('submit-cheque-book-request');
Route::post('submit-stop-cheque-book-request', [StopChequeController::class, 'submit_stop_cheque_book_request'])->name('submit-stop-cheque-book-request');

// Corporate chequebook request
Route::post('corporate-chequebook-request', [AccountServicesChequeBookRequestController::class, 'corporate_cheque_book_request'])->name('corporate-chequebook-request');


// KYC EDIT
Route::get('get-kyc-details', [KYCKycController::class, 'kyc_update'])->name('get-kyc-details');

//route for atm card
Route::post('atm-card-request-api', [AtmCardRequestController::class, 'atm_card_request'])->name('atm-card-request-api');

// ROUTE FOR ACCOUNT CREATION
Route::post('savings-account-creation-api', [SavingsAccountCreationController::class, 'savings_account_creation'])->name('savings-account-creation-api');

// FIXED DEPOSIT ACCOUNT
Route::get('fixed-deposit-account-api', [FixedDepositAccountController::class, 'fixed_deposit_account'])->name('fixed-deposit-account-api');

//route for statement request
Route::post('statement-request-api', [StatementRequestController::class, 'statement_request'])->name('statement-request-api');

//route for change-pin-api
Route::post('change-pin-api', [ChangePinController::class, 'change_pin'])->name('change-pin-api');


//Route for change-password-api
Route::post('change-password-api', [ChangePasswordController::class, 'change_password'])->name('change-password-api');

//Route for loan products api
Route::get('get-loan-products-api', [FunctionsController::class, 'get_Loan_products'])->name('get-loan-products-api');

//Route to send loan request details
Route::post('loan-request-details', [LoanRequestController::class, 'send_loan_request'])->name('loan-request-details');

//Route to send loan request details of quotation
Route::post('loan-quotation-details', [LoanQuotationController::class, 'send_loan_request_quote'])->name('loan-quotation-details');

//Route to send unredeem request
Route::post('unredeem-cardless-request', [CardlessController::class, 'send_unredeemed_request'])->name('unredeem-cardless-request');

//Route to send reversed request
Route::post('reversed-cardless-request', [CardlessController::class, 'send_reversed_request'])->name('reversed-cardless-request');

//Route to reverse cardless
Route::post('reverse-cardless', [CardlessController::class, 'reverse_cardless'])->name('reverse-cardless');

//Route to send unredeem request
Route::post('unredeem-korpor-request', [KorporController::class, 'send_unredeemed_request'])->name('unredeem-korpor-request');

//Route to send reversed request
Route::post('reversed-korpor-request', [KorporController::class, 'send_reversed_request'])->name('reversed-korpor-request');

//Route to reverse cardless
Route::post('reverse-korpor', [KorporController::class, 'reverse_korpor'])->name('reverse-korpor');


//route to return interest rate types
Route::get('get-interest-types-api', [FunctionsController::class, 'get_Interest_Types'])->name('get-interest-types-api');

//route to return loan frequencies
Route::get('get-loan-frequencies-api', [FunctionsController::class, 'get_loan_frequencies'])->name('get-loan-frequencies-api');

//route to return loan purposes
Route::get('get-loan-purpose-api', [FunctionsController::class, 'getLoanPurpose']);

Route::get('get-loan-intro-source-api', [FunctionsController::class, 'getLoanIntroSource']);
Route::get('get-loan-sectors-api', [FunctionsController::class, 'getLoanSectors']);
Route::get('get-loan-sub-sectors-api', [FunctionsController::class, 'getLoanSubSectors']);

//route to return standing order frequencies
Route::get('get-standing-order-frequencies-api', [FunctionsController::class, 'get_standing_order_frequencies'])->name('get-standing-order-frequencies-api');

//route to initiate standing order request
Route::post('initiate-standing-order-request', [StandingOrderController::class, 'standing_order_request'])->name('initiate-standing-order-request');
