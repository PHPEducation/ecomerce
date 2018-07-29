<?php
// Route::get('/shop', 'PageController@shop');
Route::post('/test', function(){
    return 'abc';
});
Route::get('/shoplist', 'PageController@shoplist');
Route::get('/', 'PageController@blog')->name('welcome');
Route::get('/shopping-cart', 'PageController@shoppingcart');
Route::get('/viewcart','PageController@viewcart')->name('muahang');
Route::post('/addToCart','PageController@addToCart')->name('addToCart');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('dangky', 'Auth\LoginController@showRegistrationForm');
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
Route::get('/home1', 'PageController@home1')->name('trangchu');
Route::get('/sanphamchitiet/{id}', 'PageController@detail')->name('sanphamchitiet');
Route::get('/showsanpham/{id}', 'PageController@showcate')->name('showcate');
Route::get('/deletecart/{id}', 'PageController@delete')->name('deletecate');
Route::name('search')->get('', 'PageController@search');
Route::post('/order', 'PageController@postorder')->name('order');
Route::get('/{slug}', 'PageController@showDetailPost');
