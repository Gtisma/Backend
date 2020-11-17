<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Api\V1\CrimeTypeController@getCrimeTypes')->name('api.crimetypes');
