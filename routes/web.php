<?php

Auth::routes();

Route::get('/', function () {
    return view('index');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => '/admin'], function (){

    Route::get('/', function () { return view('users.admin.index'); })->name('admin.index');

});

Route::group(['prefix' => '/manager'], function (){

    Route::get('/', function () { return "Hello, Manager"; })->name('manager.index');

});

Route::group(['prefix' => '/master'], function (){

    Route::get('/', function () { return "Hello, Master"; })->name('master.index');

});
