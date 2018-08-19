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
Route::get('/categorytype/{type}', 'PageController@categorytype')->name('loaisanpham');
Route::get('/detailproduct/{id}', 'PageController@detailproduct')->name('chitietsanpham');
Route::get('/contact', 'PageController@contact')->name('lienhe');
Route::get('/login', 'PageController@login')->name('dangnhap');
Route::post('/login', 'PageController@postLogin')->name('login');
Route::get('/register', 'PageController@register')->name('dangky');
Route::post('/register', 'PageController@postRegister');
Route::get('/about', 'PageController@about')->name('taikhoan');
Route::get('/checkout','PageController@checkout')->name('dathang');
Route::post('/checkout', 'PageController@postCheckOut')->name('order');
Route::get('/viewCart', 'PageController@viewCart')->name('viewCart');
Route::get('/addToCart/{id}', 'PageController@addToCart')->name('addToCart');
Route::get('/delItemCart/{id}', 'PageController@delItemCart')->name('delItemCart');
Route::get('/searchproduct', 'PageController@searchProduct')->name('searchProduct');
Route::get('/logout', 'PageController@postLogout')->name('Logout');
Route::get('/comments/{id}' , 'PageController@getComment');
Route::post('/comments/{id}', 'PageController@comments');
Route::get('/auth/facebook', 'SocialAuthController@redirectToProvider');
Route::get('/auth/facebook/callback', 'SocialAuthController@handleProviderCallback');

