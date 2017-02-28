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



Route::group(['prefix' => 'admin'], function () {
	Route::get('contoh', 'AdminController@contoh');
	Route::get('/', 'AdminController@index');
	Route::get('product', 'ProductController@index');
	Route::get('product/create', 'ProductController@create');
	Route::post('product/create', 'ProductController@store');
	Route::get('category/create', 'CategoryController@create');
	Route::post('category/create', 'CategoryController@store');
	Route::get('productimage/create', 'ProductImageController@create');
	Route::post('productimage/create', 'ProductImageController@store');
	Route::get('paymentmethod', 'PaymentMethodController@index');
	Route::get('paymentmethod/create', 'PaymentMethodController@create');
	Route::post('paymentmethod/create', 'PaymentMethodController@store');
	Route::get('paymentconfirmation', 'PaymentConfirmationController@index');
	Route::get('paymentconfirmation/create', 'PaymentConfirmationController@create');
	Route::post('paymentconfirmation/create', 'PaymentConfirmationController@store');
	Route::get('passwordreset', 'PasswordResetController@index');
	Route::get('passwordreset/create', 'PasswordResetController@create');
	Route::post('passwordreset/create', 'PasswordResetController@store');

	Route::get('orderstatus', 'OrderStatusController@index');
	Route::get('orderstatus/create', 'OrderStatusController@create');
	Route::post('orderstatus/create', 'OrderStatusController@store');

	Route::get('orderitem', 'OrderItemController@index');
	Route::get('orderitem/create', 'OrderItemController@create');
	Route::post('orderitem/create', 'OrderItemController@store');

	Route::get('orders', 'OrdersController@index');
	Route::get('orders/create', 'OrdersController@create');
	Route::post('orders/create', 'OrdersController@store');
});
	

	


Route::group(['prefix' => 'user'], function () {
	Route::get('/', 'UserController@index');
	Route::get('/account', 'UserController@account');
	Route::get('/cart', 'UserController@cart');
	Route::get('/checkout', 'UserController@checkout');
	Route::get('/detail', 'UserController@detail');
	Route::get('/contact', 'UserController@contact');
});



	Route::get('admin/home', 'AdminController@index');

Route::resource('admin/category', 'CategoryController');
Route::resource('admin/productimage', 'ProductImageController');
Route::resource('admin/user', 'AdminUserController');
Route::resource('crud', 'CrudController');
