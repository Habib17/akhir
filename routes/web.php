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
Route::group(['middleware' => 'web'], function () {
   Route::auth();
   Route::get('/home', 'LatihanLoginController@index');
    });


Route::get('access', function () {
   echo 'You Have Access';
})->middleware('isAdmin');

//Auth::routes();

Route::group(['prefix' => 'admin'], function () {
	Route::get('contoh', 'AdminController@contoh');
	Route::get('/', 'AdminController@index');

	Route::get('login', 'LoginAdminController@index');
	Route::post('login', 'LoginAdminController@login');
	Route::get('logout', 'LoginAdminController@index');
	
	Route::get('product', 'ProductController@index');
	Route::get('product/create', 'ProductController@create');
	Route::post('product/create', 'ProductController@store');
	Route::get('product/edit/{id}', 'ProductController@edit');
	Route::post('product/edit/{id}', 'ProductController@update');
	Route::get('product/confirm/{id}', 'ProductController@confirmation');
	Route::get('product/destroy/{id}', 'ProductController@destroy');

	Route::get('category', 'CategoryController@index');
	Route::get('category/create', 'CategoryController@create');
	Route::post('category/create', 'CategoryController@store');
	Route::get('category/edit/{id}', 'CategoryController@edit');
	Route::post('category/edit/{id}', 'CategoryController@update');
	Route::get('category/confirm/{id}','CategoryController@confirmation');
	Route::get('category/destroy/{id}','CategoryController@destroy');



	
	Route::get('productimage', 'ProductImageController@index');
	Route::get('productimage/create', 'ProductImageController@create');
	Route::post('productimage/create', 'ProductImageController@store');
	Route::get('productimage/edit/{id}', 'ProductImageController@edit');
	Route::post('productimage/edit/{id}', 'ProductImageController@update');
	Route::get('productimage/confirm/{id}','ProductImageController@confirmation');
	Route::get('productimage/destroy/{id}','ProductImageController@destroy');


	Route::get('paymentmethod', 'PaymentMethodController@index');
	Route::get('paymentmethod/create', 'PaymentMethodController@create');
	Route::post('paymentmethod/create', 'PaymentMethodController@store');
	Route::get('paymentmethod/edit/{id}', 'PaymentMethodController@edit');
	Route::post('paymentmethod/edit/{id}', 'PaymentMethodController@update');
	Route::get('paymentmethod/confirm/{id}','PaymentMethodController@confirmation');
	Route::get('paymentmethod/destroy/{id}','PaymentMethodController@destroy');


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
	Route::get('orders/confirm/{id}','OrdersController@confirmation');
	Route::get('orders/destroy/{id}','OrdersController@destroy');
	Route::get('orders/edit/{id}', 'OrdersController@edit');
	Route::post('orders/edit/{id}', 'OrdersController@update');

});
	

	


Route::group(['prefix' => 'user'], function () {
	Route::get('/', 'UserController@index');
	Route::get('/cart', 'UserController@cart');
	Route::get('/checkout', 'UserController@checkout');
	Route::get('/detail', 'UserController@detail');
	Route::get('/contact', 'UserController@contact');
	Route::get('/signup', 'SignupController@index');
	Route::get('/login', 'LoginController@index');
	Route::get('/shipping', 'ShippingController@index');
});



Route::group(['prefix' => 'service'], function () {
	//Route::get('country', 'ServiceController@country');
	Route::get('province', 'ServiceController@province');
	Route::get('city', 'ServiceController@city');
	Route::get('district', 'ServiceController@district');
});



Route::get('/home', 'HomeController@index');
