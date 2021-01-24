<?php
use Illuminate\Support\Facades\Route;


Route::group( [ 'middleware' => [ 'auth','role:administrator|superadmin' ] ], function () {

    Route::get('/', 'Admin\SecurityController@viewSecurity')->name('admin.view.user');
    Route::get('/add', 'Admin\SecurityController@viewaddSecurity')->name('admin.view.addsecurity');
    Route::post('/add', 'Admin\SecurityController@addSecurity')->name('admin.store.security');

});
