<?php

use App\Http\Controllers\AuthOtpController;
use Illuminate\Support\Facades\Auth;
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



/*


Route::get('/plan',function(){
return view('plans.index');
});

Route::get('/create/plan',function(){
    return view('plans.create');
});

Route::get('/members',function(){
    return view('members.index');
});

Route::get('/members/show',function(){
    return view('members.show');
});

Route::get('/members/edit',function(){
    return view('members.edit');
});

Route::get('invoice',function(){
  return view('invoices.index');
});

Route::get('/invoice/show',function(){
    return view('invoices.show');
});






 */


Route::get('/pay/invoice/{invoice}',[\App\Http\Controllers\InvoiceController::class,'pay'])->name('pay');


Auth::routes();

Route::middleware(['auth','phone_or_email'])->group(function (){
    Route::resource('invoice', App\Http\Controllers\InvoiceController::class);


    Route::middleware('role:admin')->group(function(){

        Route::resource('user', App\Http\Controllers\UserController::class);

        Route::resource('account', App\Http\Controllers\AccountController::class);

        Route::resource('plan', App\Http\Controllers\PlanController::class);


        Route::resource('child', App\Http\Controllers\ChildController::class);



        Route::view('importes','imports.index')->name('importe');

        Route::get('/improved',[\App\Http\Controllers\UserController::class,'get_improved_user'])->name('user.improved');

        Route::get('user/approve/{user}',[\App\Http\Controllers\UserController::class,'improve_user'])->name('user.approve');

        Route::get('paid/invoice',[\App\Http\Controllers\InvoiceController::class,'get_paid_invoice'])->name('invoice.paid');

        Route::get('unpaid/invoice',[\App\Http\Controllers\InvoiceController::class,'get_inpaid_invoice'])->name('invoice.inpaid');

        Route::get('downloads/{invoice}',[\App\Http\Controllers\InvoiceController::class,'download'])->name('downloads');

        Route::get('users/unimproved',[\App\Http\Controllers\UserController::class,'get_unimproved_users'])->name('user.unimproved');

        Route::get('/dashboard',\App\Http\Controllers\HomeController::class)->name('home');

        Route::post('/administration_fee/{invoice}',[\App\Http\Controllers\InvoiceController::class,'add_administration_fee'])->name('administration.fee');


    });

    Route::middleware('role:member')->group(function(){

        Route::get('member/dashboard',[\App\Http\Controllers\UserController::class,'member_dashboard'])->name('member.dashboard');
        Route::get('profile',[\App\Http\Controllers\UserController::class,'profile'])->name('profile');


    });



});
Route::post('approve_all',[\App\Http\Controllers\UserController::class,'approve_all'])->name('approve.all');


Route::view('/verify/number','guest.verify-otp')->name('verify.otp');

Route::post('verification/verify/mobile',[\App\Http\Controllers\Auth\VerifyMobileController::class,'__invoke'])->name('verification.verify.mobile');
Route::post('verification/verify/email',[\App\Http\Controllers\Auth\VerifyMobileController::class,'__invoke'])->name('verification.verify');

Route::post('/all',[\App\Http\Controllers\UserController::class,'import'])->name('importe.all');

Route::get('payment/{invoice}',[\App\Http\Controllers\InvoiceController::class,'checkout'])->name('payment');


Route::stripeWebhooks('webhook');



Route::view('/thanks','checkout.show')->name('thanks');

