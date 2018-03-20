<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::POST('createService', 'ServiceController@create')->name('createService');
Route::POST('createProduct', 'ProductsController@create')->name('createProduct');
Route::POST('editAbout', 'AboutUsController@edit')->name('editAbout');
Route::POST('contact', 'ContactController@index')->name('contact');
Route::POST('orderService', 'ServiceController@order')->name('orderService');
Route::POST('editInformation', 'AboutUsController@editInformation')->name('editInfo');
