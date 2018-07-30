<?php

Route::get('/shop', 'PageController@shop');
Route::get('/shoplist', 'PageController@shoplist');
Route::get('/', 'PageController@blog');
Route::get('/shopping-cart', 'PageController@shoppingcart');
Route::get('/viewcart', 'PageController@viewcart');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => '/admin'], function (){
    Route::get('/', 'Admin\DashboardController@index');
    Route::resource('categories', 'Admin\CategoryController');
});
