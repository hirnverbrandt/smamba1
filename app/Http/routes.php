<?php
/**
 * Created by PhpStorm.
 * User: lucabrandt
 * Date: 2019-01-19
 * Time: 15:32
 */

Route::get('/', 'HomeController@checksession');

Route::auth();

Route::group(['middleware' => 'auth'], function() {
    Route::get('/home', 'HomeController@index');

    Route::resource('items', 'ItemController', ['except' => 'show']);
    Route::resource('users', 'UserController', ['except' => 'show']);
});
