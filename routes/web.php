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
Route::delete('/cart/{product}','CartController@destroy')->name('cart.destroy');

Route::get('/wishlist','WishlistController@index')->name('wishlist.index');
Route::post('/wishlist','WishlistController@store')->name('wishlist.store');
Route::delete('/wishlist/{product}','WishlistController@destroy')->name('wishlist.destroy');
Route::get('empty',function(){
    Cart::instance('wishlist')->destroy();
});

Route::get('/index','FrontController@index')->name('index');
Route::get('/login','FrontController@index')->name('login');
Route::get('/face','FrontController@face')->name('face');
Route::get('/lips','FrontController@lips')->name('lips');
Route::get('/eyes','FrontController@eyes')->name('eyes');
Route::get('/{id}','FrontController@details')->name('details');
Route::get('/checkout/step1','FrontController@checkout')->name('checkout.step1');



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


