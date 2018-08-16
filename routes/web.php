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
    return view('master_admin');
});
Route::group(['prefix'=>'admin'], function() {
    Route::group(['prefix'=>'users'], function() {
        Route::get('/listUser', 'UserController@getlistUser')->name('listUser');
        Route::get('/addUser', 'UserController@getaddUser')->name('addUser');
        Route::get('/editUser', 'UserController@geteditUser')->name('editUser');
    });
    Route::group(['prefix'=>'product'], function() {
        Route::get('/listUser', 'ProductController@getlistProduct')->name('listProduct');
        Route::get('/addUser', 'ProductController@getaddProduct')->name('addProduct');
        Route::get('/editUser', 'ProductController@geteditProduct')->name('editProduct');
    });
    Route::group(['prefix'=>'category'], function() {
        Route::get('/listUser', 'CategoryController@getlistCategory')->name('listCategory');
        Route::get('/addUser', 'CategoryController@getaddCategory')->name('addCategory');
        Route::get('/editUser', 'CategoryController@geteditCategory')->name('editCategory');
    });
});

Route::get('/index', 'PageController@getIndex')->name('trangchu');
Route::get('/categorytype', 'PageController@categorytype')->name('loaisanpham');
Route::get('/detailproduct', 'PageController@detailproduct')->name('chitietsanpham');
Route::get('/contact', 'PageController@contact')->name('lienhe');
Route::get('/login', 'PageController@login')->name('dangnhap');
Route::get('/register', 'PageController@register')->name('dangky');
Route::get('/about', 'PageController@about')->name('taikhoan');
Route::get('/checkout','PageController@checkout')->name('dathang');
Route::get('/addToCart', 'PageController@addToCart')->name('addToCart');

