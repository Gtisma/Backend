<?php
use Illuminate\Support\Facades\Route;


Route::group( [ 'middleware' => [ 'auth','role:administrator|superadmin' ] ], function () {

    Route::get('/', 'Admin\HomeController@index')->name('admin.home');
    Route::get('/version', function () {
        dd(phpinfo());
    } )->name( 'version' );
});

