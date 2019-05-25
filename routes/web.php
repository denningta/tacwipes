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

// Uncomment to present "Coming Soon" Page
// Route::get('/', 'HomeController@home')->name('comingsoon');


//Comment below to present "Coming Soon" page only
Route::post('/newsletter', 'UserController@store');

Route::get('/', 'HomeController@index')->name('index');

Route::get('/products', 'ProductController@index')->name('products');
Route::get('/products/{product}/detail', 'ProductController@detail')->name('detail');

Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart/add', 'CartController@store')->name('cart.add');
Route::get('/cart/{item}/delete', 'CartController@delete')->name('cart.delete');

Route::get('/checkout', 'PurchaseController@checkout')->name('checkout');
Route::get('/outofstock', 'PurchaseController@outofstock')->name('outofstock');

Route::get('/about', 'HomeController@about')->name('about');

