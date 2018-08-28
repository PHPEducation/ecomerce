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
        Route::get('/listUser', 'UserController@getListUser')->name('listUser');

        Route::get('addUser', 'UserController@getAddUser')->name('addUser');
        Route::post('addUser', 'UserController@postaddUser');

        Route::get('editUser/{id}', 'UserController@getEditUser')->name('editUser');
        Route::post('editUser/{id}', 'UserController@postEditUser');

        Route::get('/delete/{id}', 'UserController@getDeleteUser');
    });
    Route::group(['prefix'=>'product'], function() {
        Route::get('/listProduct', 'ProductController@getListProduct')->name('listProduct');

        Route::get('addProduct', 'ProductController@getAddProduct')->name('addProduct');
        Route::post('addProduct', 'ProductController@postAddProduct');

        Route::get('editProduct/{id}', 'ProductController@getEditProduct')->name('editProduct');
        Route::post('editProduct/{id}', 'ProductController@postEditProduct');

        Route::get('/delete/{id}', 'ProductController@getDeleteProduct');

    });
    Route::group(['prefix'=>'category'], function() {
        Route::get('/listCategory', 'CategoryController@getListCategory')->name('listCategory');

        Route::get('/addCategory', 'CategoryController@getAddCategory')->name('addCategory');
        Route::post('/addCategory', 'CategoryController@postAddCategory');

        Route::get('editCategory/{id}', 'CategoryController@getEditCategory')->name('editCategory');
        Route::post('editCategory/{id}', 'CategoryController@postEditCategory');

        Route::get('/delete/{id}', 'CategoryController@getDeleteCategory');

        Route::post('category-import', 'CategoryController@importCategory')->name('importCategory');
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

Auth::routes();
