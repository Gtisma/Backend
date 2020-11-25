<?php

use Illuminate\Support\Facades\Route;

Route::get('/{id}', 'Api\V1\RankController@getRanks')->name('api.rank');
