<?php

Auth::routes();

Route::get('/', 'MainController@index')->name('index');

Route::resource('orders', 'CRUD\OrdersController');

Route::group(['prefix' => '/admin', 'middleware' => ['auth', 'checkAdminUser']], function (){

    Route::get('/', 'Pages\AdminPageController@index')->name('admin.index');
    Route::get('/archive', 'Pages\AdminPageController@archiveIndex')->name('admin.archiveIndex');
    Route::get('/archive/{order}', 'Pages\AdminPageController@archiveOrder')->name('admin.archiveOrder');
    Route::get('/create', 'Pages\AdminPageController@create')->name('admin.create');
    Route::get('/detail/{order}', 'Pages\AdminPageController@order')->name('admin.order');
    
    Route::resource('usersType', 'CRUD\UsersTypeController');
    Route::resource('users', 'CRUD\UsersController');
    Route::resource('ordersStatus', 'CRUD\OrdersStatusController');
    Route::resource('boxesTypes', 'CRUD\BoxesTypeController');

});

Route::group(['prefix' => '/manager', 'middleware' => ['auth', 'checkManagerUser']], function (){

    Route::get('/', 'Pages\ManagerPageController@index')->name('manager.index');
    Route::get('/orders', function () { return view('users.manager.orders'); } )->name('manager.orders');
    Route::get('/archive', 'Pages\ManagerPageController@archiveIndex')->name('manager.archiveIndex');
    Route::get('/archive/{order}', 'Pages\ManagerPageController@archiveOrder')->name('manager.archiveOrder');
    Route::get('/create', 'Pages\ManagerPageController@create')->name('manager.create');
    Route::get('/detail/{order}', 'Pages\ManagerPageController@order')->name('manager.order');

    
});

Route::group(['prefix' => '/master', 'middleware' => ['auth', 'checkMasterUser']], function (){

    Route::get('/', 'Pages\MasterPageController@index')->name('master.index');
    Route::get('/production', 'Pages\MasterPageController@production' )->name('master.production');
    Route::get('/archive', 'Pages\MasterPageController@archiveIndex')->name('master.archiveIndex');
    Route::get('/archive/{order}', 'Pages\MasterPageController@archiveOrder')->name('master.archiveOrder');
    Route::get('/detail/{order}', 'Pages\MasterPageController@order')->name('master.order');
    Route::get('/step/{order}', 'Pages\MasterPageController@step')->name('master.step');
    Route::put('/next_step/{order}', 'CRUD\OrdersController@nextStep')->name('master.next_step');
    Route::put('/end_step/{order}', 'CRUD\OrdersController@endStep')->name('master.end_step');

});
