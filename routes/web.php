<?php

Auth::routes();

Route::get('/', function () {
    return view('index');
});

Route::get('/home', 'MainController@index')->name('home');

// Route::resource('CRUD\UsersController');

Route::group(['prefix' => '/admin'], function (){

    Route::get('/', 'Pages\AdminPageController@index')->name('admin.index');
    //Route::get('/add-order', function () { return view('users.admin.add_order'); } )->name('admin.add_order');
    Route::resource('usersType', 'CRUD\UsersTypeController');
    Route::resource('users', 'CRUD\UsersController');

});

Route::group(['prefix' => '/manager'], function (){

    Route::get('/', function () { return view('users.manager.index'); })->name('manager.index');
    Route::get('/orders', function () { return view('users.manager.orders'); } )->name('manager.orders');

});

Route::group(['prefix' => '/master'], function (){

    Route::get('/', function () { return "Hello, Master"; })->name('master.index');

});
