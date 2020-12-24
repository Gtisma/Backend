<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Api\V1\StateController@getStates')->name('api.state');
