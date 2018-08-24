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

Route::get('/admin', function () {
    return view('master_admin');
});
Route::group(['prefix'=>'admin'], function() {
    Route::group(['prefix'=>'users'], function() {
        Route::get('/listUser', 'UserController@getlistUser')->name('listUser');

        Route::get('addUser', 'UserController@getaddUser')->name('addUser');
        Route::post('addUser', 'UserController@postaddUser');

        Route::get('editUser/{id}', 'UserController@geteditUser')->name('editUser');
        Route::post('editUser/{id}', 'UserController@posteditUser');

        Route::get('/delete/{id}', 'UserController@getdeleteUser');
    });
    Route::group(['prefix'=>'product'], function() {
        Route::get('/listProduct', 'ProductController@getlistProduct')->name('listProduct');

        Route::get('addProduct', 'ProductController@getaddProduct')->name('addProduct');
        Route::post('addProduct', 'ProductController@postaddProduct');

        Route::get('editProduct/{id}', 'ProductController@geteditProduct')->name('editProduct');
        Route::post('editProduct/{id}', 'ProductController@posteditProduct');

        Route::get('/delete/{id}', 'ProductController@getdeleteProduct');

    });
    Route::group(['prefix'=>'category'], function() {
        Route::get('/listCategory', 'CategoryController@getlistCategory')->name('listCategory');

        Route::get('addCategory', 'CategoryController@getaddCategory')->name('addCategory');
        Route::post('addCategory', 'CategoryController@postaddCategory');

        Route::get('editCategory/{id}', 'CategoryController@geteditCategory')->name('editCategory');
        Route::post('editCategory/{id}', 'CategoryController@posteditCategory');

        Route::get('/delete/{id}', 'CategoryController@getdeleteCategory');
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

