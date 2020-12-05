<?php

use Illuminate\Support\Facades\Route;

Route::post( '/update', 'Api\V1\PasswordController@updatePassword' )->name('api.password.update');
Route::post( '/reset', 'Api\V1\PasswordController@Reset' )->name('api.password.reset');

