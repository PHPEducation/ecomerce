<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function(){
        return view('master');
});
Route::get('/home1', 'PageController@home1')->name('trangchu');
Route::get('/sanphamchitiet/{id}', 'PageController@detail')->name('sanphamchitiet');
Route::get('/shop', 'PageController@shop');
Route::get('/shoplist', 'PageController@shoplist');
Route::get('/blog','PageController@blog');
Route::get('/shopping-cart','PageController@shoppingcart');
Route::get('/viewcart','PageController@viewcart');
Route::get('/register', 'PageController@register');



Auth::routes();
Route::get('register', 'Auth\RegisterController@showRegistrationForm');
Route::post('register', 'Auth\RegisterController@register');

Route::get('login', 'Auth\LoginController@showLoginForm');
Route::post('login', 'Auth\LoginController@login');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
