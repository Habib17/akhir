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

//Route::get('/', function () {
    //return view('welcome');
//});


Route::get('admin', 'AdminController@admin');

Route::group(['prefix' => 'admin'], function () {
	Route::get('product', 'ProductController@index');
	Route::get('product/create', 'ProductController@create');
	Route::post('product/create', 'ProductController@store');
	Route::get('category/create', 'CategoryController@create');
	Route::post('category/create', 'CategoryController@store');
});


	Route::get('/', 'UserController@index');
	Route::get('/account', 'UserController@account');
	Route::get('/cart', 'UserController@cart');
	Route::get('/checkout', 'UserController@checkout');
	Route::get('/detail', 'UserController@detail');
	Route::get('/contact', 'UserController@contact');
	Route::get('admin/home', 'AdminController@index');

Route::resource('admin/category', 'CategoryController');
Route::resource('admin/orders', 'OrdersController');
Route::resource('admin/orderstatus', 'OrderStatusController');
Route::resource('admin/orderitem', 'OrderItemController');
Route::resource('admin/productimage', 'ProductImageController');
Route::resource('admin/user', 'AdminUserController');
Route::resource('crud', 'CrudController');
