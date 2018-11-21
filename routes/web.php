<?php

Auth::routes();

Route::get('/', 'MainController@index')->name('index');

Route::group(['prefix' => '/admin', 'middleware' => ['auth', 'checkAdminUser']], function (){

    Route::get('/', 'Pages\AdminPageController@index')->name('admin.index');
    //Route::get('/add-order', function () { return view('users.admin.add_order'); } )->name('admin.add_order');
    Route::resource('usersType', 'CRUD\UsersTypeController');
    Route::resource('users', 'CRUD\UsersController');
    Route::resource('ordersStatus', 'CRUD\OrdersStatusController');
    Route::resource('orders', 'CRUD\OrdersController');

});

Route::group(['prefix' => '/manager', 'middleware' => ['auth', 'checkManagerUser']], function (){

    Route::get('/', function () { return view('users.manager.index'); })->name('manager.index');
    Route::get('/orders', function () { return view('users.manager.orders'); } )->name('manager.orders');

});

Route::group(['prefix' => '/master', 'middleware' => ['auth', 'checkMasterUser']], function (){

    Route::get('/', function () { return view('users.master.index'); })->name('master.index');

});
