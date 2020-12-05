<?php

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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/sendtestmail',  [App\Http\Controllers\Admin\UserController::class,'sendTestmail'])->name( 'send-test-mail' );

//activate user
Route::get( '/activate/{userid}/gtisma/{active}/{random}', [App\Http\Controllers\Admin\UserController::class, 'activate'] )->name( 'activate-user' );
Route::get( '/resendactivation', [App\Http\Controllers\Admin\UserController::class, 'resendActivation'] )->name( 'activate-user' );
Route::post( '/resendactivation', [App\Http\Controllers\Admin\UserController::class, 'resendActivationLink'] )->name( 'resend-activate-user' );

Route::get('/welcome', function() {
    return view('admin.email.welcome-otp');
});
