<?php
Route::get('/', function () {
    echo "xin chao";
});
Route::get('/shop', 'PageController@shop');
Route::get('/shoplist', 'PageController@shoplist');
Route::get('/blog','PageController@blog');
Route::get('/shopping-cart','PageController@shoppingcart');
Route::get('/viewcart','PageController@viewcart');
Auth::routes();
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::get('/home', 'HomeController@index')->name('home');
