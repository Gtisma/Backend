<?php
use Illuminate\Support\Facades\Route;


Route::group( [ 'middleware' => [ 'auth','role:administrator|superadmin' ] ], function () {

    Route::get('/', 'Admin\ReportController@index')->name('admin.view.report');
    Route::post('/', 'Admin\ReportController@store')->name('admin.store.report');
    Route::get('/add', 'Admin\ReportController@create')->name('admin.create.report');
    Route::get('/view/{id}', 'Admin\ReportController@viewReport')->name('admin.vieweach.report');
    Route::get('/crimetype/{id}', 'Admin\ReportController@reportByCrimeType')->name('admin.sortbycrimetype.report');
    Route::get('/approve/{id}', 'Admin\ReportController@approveReport')->name('admin.approve.report');
    Route::get('/{status}', 'Admin\ReportController@index')->name('admin.view.reportstatus');

});
