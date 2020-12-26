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
Route::get('/mailable', function () {
    $invoice = App\Invoice::find(1);

    return new App\Mail\InvoicePaid($invoice);
});
Route::group(['namespace'=>'Frontend'], function(){
	Route::get('/','HomeController@index')->name('frontend.home.index');
	Route::get('/product/{id}','ProductController@show')->name('frontend.product.show');
	Route::get('/productlist','CategoryController@index')->name('frontend.category.index');
	Route::get('/category/{id}','CategoryController@show')->name('frontend.category.show');
	Route::post('/productlist/search','CategoryController@search')->name('frontend.category.search');
	Route::post('/productlist/filter','CategoryController@filter')->name('frontend.category.filter');
	Route::get('/about','AboutController@show');
	Route::get('/contact','ContactController@show');
	Route::get('/cart','CartController@show')->name('frontend.cart.list');
	Route::get('/cart/{id}','CartController@insert')->name('frontend.cart.insert');
	Route::get('/cart/delete/{id}','CartController@delete')->name('frontend.cart.delete');
	Route::post('/cart/update','CartController@update')->name('frontend.cart.update');
	Route::post('/review','ReviewController@store')->name('review.create');
	
	
});
Route::group(['namespace'=>'Backend', 'prefix' => 'admin', 'middleware' => 'auth'],function(){
	Route::get('/','DashboardController@index')->name('admin');
	Route::resource('/user','UserController');
	Route::resource('/product','ProductController');
	Route::resource('/category','CategoryController');
	Route::resource('/productimg','ProductImgController');
	Route::resource('/sale','SaleProductController');
	Route::resource('/review','ReviewController');
	//Route::get('/order','OrderController@index')->name('orderBackend');
	Route::resource('/orderBackend', 'OrderController');
	//Route::get('/order/{id}','OrderController@show')->name('orderdetail');
	// Route::get('logout','LoginController@logout');
});
Route::group(['namespace' => 'Auth'], function(){
	Route::get('login', [ 'as' => 'login', 'uses' => 'LoginController@getLogin']);
	Route::post('login', [ 'as' => 'login', 'uses' => 'LoginController@postLogin']);
	Route::get('logout', [ 'as' => 'logout', 'uses' => 'LogoutController@getLogout']);
	Route::get('register', 'RegisterController@getRegister');
	Route::post('register', 'RegisterController@postRegister');
});

Route::group(['middleware' => 'auth', 'namespace'=>'Frontend'], function(){
	Route::get('order', 'OrderController@index')->name('order.index');
	Route::post('order', [ 'as' => 'order', 'uses' => 'OrderController@store']);
	Route::resource('/review','ReviewController');
	Route::resource('/changePassword','ChangePasswordController');
	Route::resource('/account','AccountController');
});