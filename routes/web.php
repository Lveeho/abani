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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});
Route::get('/backend','HomeController@showClientDashboard');

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
Route::get('/face','FrontController@face')->name('face');
Route::get('/lips','FrontController@lips')->name('lips');
Route::get('/eyes','FrontController@eyes')->name('eyes');
Route::get('/{id}','FrontController@details')->name('details');
Route::post('/checkout1','CheckoutController@storeStep1')->name('checkout.store1');
Route::post('/checkout2','CheckoutController@storeStep2')->name('checkout.store2');
Route::get('/checkout/step1','CheckoutController@checkout1')->name('checkout.step1');
Route::get('/checkout/step2','CheckoutController@checkout2')->name('checkout.step2');
Route::get('/checkout/step3','CheckoutController@checkout3')->name('checkout.step3');
Route::get('/checkout/step4','CheckoutController@checkout4')->name('checkout.step4');
Route::post('/aankopen','CheckoutController@buy')->name('buy');

Route::resource('/client/user','ClientController');



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


