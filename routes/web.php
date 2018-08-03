<?php

Route::get('/shop', 'PageController@shop');
Route::get('/shoplist', 'PageController@shoplist');
Route::get('/', 'PageController@blog')->name('welcome');
Route::get('/shopping-cart', 'PageController@shoppingcart');
Route::get('/viewcart', 'PageController@viewcart');
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::get('/logout','Auth\LoginController@logout')->name('test');
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::group(['prefix' => '/admin'], function ()
{
    Route::get('/', 'Admin\DashboardController@index');
    Route::resource('categories', 'Admin\CategoryController');
    Route::resource('brands', 'Admin\BrandController');
    Route::resource('products', 'Admin\ProductController');
});
Route::get('/{slug}', 'PageController@showDetailPost');
