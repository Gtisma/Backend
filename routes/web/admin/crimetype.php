<?php
use Illuminate\Support\Facades\Route;


Route::group( [ 'middleware' => [ 'auth','role:administrator|superadmin' ] ], function () {

    Route::get('/', 'Admin\CrimeTypeController@viewCrimeTypes')->name('admin.view.crimetype');
    Route::get('/add', 'Admin\CrimeTypeController@viewaddCrimeType')->name('admin.view.addcrimetype');
    Route::post('/add', 'Admin\CrimeTypeController@addCrimeType')->name('admin.store.crimetype');
    Route::get('/del/{id}', 'Admin\CrimeTypeController@DeleteCrimeType')->name('admin.delete.crimetype');
});
