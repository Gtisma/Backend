<?php
use Illuminate\Support\Facades\Route;


Route::group( [ 'middleware' => [ 'auth','role:administrator|superadmin' ] ], function () {

    Route::get('/add', 'Admin\RankController@viewaddRank')->name('admin.view.addrank');
    Route::post('/add', 'Admin\RankController@addRank')->name('admin.store.rank');
    Route::get('/{id}', 'Admin\RankController@viewRanks')->name('admin.view.ranks');

});
