<?php

use Illuminate\Support\Facades\Route;

Route::post('/login', 'Api\V1\AuthController@Login')->name('api.auth.login');
Route::post('/register', 'Api\V1\AuthController@Register')->name('api.auth.register');
