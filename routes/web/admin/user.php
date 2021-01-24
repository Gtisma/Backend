<?php
use Illuminate\Support\Facades\Route;


Route::group( [ 'middleware' => [ 'auth','role:administrator|superadmin' ] ], function () {

    Route::get('/{type}', 'Admin\UserController@viewUsers')->name('admin.view.user');
    Route::get('/', 'Admin\UserController@viewUsers')->name('admin.view.user');

});
