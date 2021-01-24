<?php
use Illuminate\Support\Facades\Route;


Route::group( [ 'middleware' => [ 'auth','role:administrator|superadmin' ] ], function () {

    Route::get('/{id}', 'Admin\rankController@viewRanks')->name('admin.view.ranks');
    Route::post('/add', 'Admin\UserController@viewUsers')->name('admin.view.addrakn');

});
