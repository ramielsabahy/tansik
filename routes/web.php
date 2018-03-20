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

Route::get('/', 'HomeController@first');
Route::get('test', function(){
	return view('layouts.main');
});

Auth::routes();

Route::group(['prefix' => 'admin'], function () {
	Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

	Route::get('/service', 'ServiceController@index')->name('service')->middleware('auth');
	Route::any('deleteOrder/{id}', 'ServiceController@deleteOrder')->name('deleteOrder')->middleware('auth');
	Route::get('showService', 'ServiceController@show')->name('showService')->middleware('auth');
	Route::any('deleteService/{id}', 'ServiceController@delete')->name('deleteService')->middleware('auth');
	Route::any('editService/{id}', 'ServiceController@edit')->name('editService')->middleware('auth');
	Route::POST('updateService/{id}', 'ServiceController@update')->name('updateService')->middleware('auth');



	Route::get('/product', 'ProductsController@index')->name('products')->middleware('auth');
	Route::get('showProduct', 'ProductsController@show')->name('showProduct')->middleware('auth');
	Route::any('deleteProduct/{id}', 'ProductsController@delete')->name('deleteProduct')->middleware('auth');
	Route::any('editProduct/{id}', 'ProductsController@edit')->name('editProduct')->middleware('auth');
	Route::POST('updateProduct/{id}', 'ProductsController@update')->name('updateProduct')->middleware('auth');

	Route::get('/aboutus', 'AboutUsController@index')->name('about')->middleware('auth');
	Route::get('serviceOrders', 'OrdersController@index')->name('serviceOrders')->middleware('auth');
	Route::get('information', 'AboutUsController@information')->name('information')->middleware('auth');
});

