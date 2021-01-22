<?php
use Illuminate\Support\Facades\Route;


Route::group( [ 'middleware' => [ 'auth','role:administrator|superadmin' ] ], function () {

    Route::get('/', 'Admin\ReportController@index')->name('admin.view.report');
    Route::post('/', 'Admin\ReportController@store')->name('admin.store.report');
    Route::get('/add', 'Admin\ReportController@create')->name('admin.create.report');
    Route::get('/:pending', 'Admin\ReportController@index')->name('admin.view.pendingreport');

});
