<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Api\V1\GenderController@getGenders')->name('api.gender');
