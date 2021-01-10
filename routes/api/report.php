<?php

use Illuminate\Support\Facades\Route;
Route::group( [ 'middleware' => [ 'auth:api'] ], function () {
    Route::post( '/', 'Api\V1\ReportController@sendReport' )->name('store.reports');
    Route::get( '/', 'Api\V1\ReportController@viewReport' )->name('get.reports');
    Route::post( '/approval', 'Api\V1\ReportController@approveReport' )->name('a[[rove.reports');
});
