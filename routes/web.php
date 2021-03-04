<?php

use App\Http\Controllers\loginController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [loginController::class, 'login'])->name('login');

Route::get('/reset-password', [loginController::class, 'reset_password'])->name('reset-password');

Route::get('/forget-password', [loginController::class, 'forget_password'])->name('forget-password');


// Transfer Routes
Route::get('/transfer', [transferController::class, 'transfer'])->name('transfer');
Route::get('/add-beneficiary', [transferController::class, 'add_beneficiary'])->name('add-beneficiary');
Route::get('/add-beneficiary/same-bank', [transferController::class, 'same_bank'])->name('same-bank');
Route::get('/add-beneficiary/local-bank', [transferController::class, 'local_bank'])->name('local-bank');
Route::get('/add-beneficiary/international-bank', [transferController::class, 'international_bank'])->name('international-bank');







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

