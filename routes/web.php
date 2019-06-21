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

use Gloudemans\Shoppingcart\Facades\Cart;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/cart','CartController@index')->name('cart.index');
Route::post('/cart','CartController@store')->name('cart.store');
Route::get('empty',function(){
    Cart::destroy();
});

Route::get('/index','FrontController@index');
Route::get('/face','FrontController@face');
Route::get('/lips','FrontController@lips');
Route::get('/eyes','FrontController@eyes');
Route::get('/wishlist','FrontController@wishlist');
Route::get('/{id}','FrontController@details')->name('details');



Auth::routes();
Route::group(['middleware'=>'admin'],function() {
    Route::resource('/admin/users', 'UserController');
    Route::resource('/admin/users/address','AddressController');
    Route::resource('/admin/deletepivotproduct','CountryController');
    Route::resource('/admin/brands','BrandController');
    Route::resource('/admin/producttypes','ProductTypesController');
    Route::resource('/admin/categories','CategoryController');
    Route::resource('/admin/colors','ColorController');
    Route::resource('/admin/products','ProductController');
    Route::resource('/admin/lots','LotController');
    Route::resource('/admin/photos','PhotoController');
});


