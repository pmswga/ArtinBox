<?php

Auth::routes();

Route::get('/', 'MainController@index')->name('index');

Route::resource('orders', 'CRUD\OrdersController');

Route::group(['prefix' => '/admin', 'middleware' => ['auth', 'checkAdminUser']], function (){

    Route::get('/', 'Pages\AdminPageController@index')->name('admin.index');
    Route::get('/production', 'Pages\AdminPageController@production')->name('admin.production');
    Route::get('/processes', 'Pages\AdminPageController@processes')->name('admin.processes');
    Route::get('/archive', 'Pages\AdminPageController@archive')->name('admin.archive');
    
    Route::resource('usersType', 'CRUD\UsersTypeController');
    Route::resource('users', 'CRUD\UsersController');
    Route::resource('ordersStatus', 'CRUD\OrdersStatusController');
    Route::resource('boxesTypes', 'CRUD\BoxesTypeController');

});

Route::group(['prefix' => '/manager', 'middleware' => ['auth', 'checkManagerUser']], function (){

    Route::get('/', 'Pages\ManagerPageController@index')->name('manager.index');
    Route::get('/orders', function () { return view('users.manager.orders'); } )->name('manager.orders');
    Route::get('/production', 'Pages\ManagerPageController@production')->name('manager.production');
    Route::get('/processes', 'Pages\ManagerPageController@processes')->name('manager.processes');

    
});

Route::group(['prefix' => '/master', 'middleware' => ['auth', 'checkMasterUser']], function (){

    Route::get('/', 'Pages\MasterPageController@index')->name('master.index');
    Route::get('/production', 'Pages\MasterPageController@production' )->name('master.production');


});
