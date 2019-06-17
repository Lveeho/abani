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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index','FrontController@index');
Route::get('/sales','FrontController@sales');
Route::get('/face','FrontController@face');
Route::get('/lips','FrontController@lips');
Route::get('/eyes','FrontController@eyes');
Route::get('/shoppingcart','FrontController@shoppingcart');
Route::get('/wishlist','FrontController@wishlist');



Auth::routes();
Route::group(['middleware'=>'admin'],function() {
    Route::resource('/admin/users', 'UserController');
    Route::resource('/admin/users/address','AddressController');
});


