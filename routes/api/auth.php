<?php

use Illuminate\Support\Facades\Route;

Route::post('/login', 'Api\V1\AuthController@Login')->name('api.auth.login');
