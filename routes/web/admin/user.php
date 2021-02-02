<?php
use Illuminate\Support\Facades\Route;


Route::group( [ 'middleware' => [ 'auth','role:administrator|superadmin' ] ], function () {

    Route::get('/', 'Admin\UserController@viewUsers')->name('admin.view.user');
    Route::get('/profile', 'Admin\UserController@viewProfile')->name('admin.view.userprofile');
    Route::get('/addadmin', 'Admin\UserController@viewAdminPage')->name('admin.view.addadmin');
    Route::post('/addadmin', 'Admin\UserController@storeAdmin')->name('admin.store.admin');
    Route::get('/profile/{id}', 'Admin\UserController@viewProfile')->name('admin.view.usereachprofile');
    Route::get('/{type}', 'Admin\UserController@viewUsers')->name('admin.view.usertype');

});
