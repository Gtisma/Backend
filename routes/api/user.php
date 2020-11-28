<?php

use Illuminate\Support\Facades\Route;

Route::post( '/confirmotp', 'Api\V1\UserController@confirmOtp' )->name('confirm.otp');
Route::post( '/resendotp', 'Api\V1\UserController@resendOTPNow' )->name('resend.otp');
Route::group( [ 'middleware' => [ 'auth:api'] ], function () {
    Route::get( '/', 'Api\V1\UserController@getUser' )->name('get.user');
});
