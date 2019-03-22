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


Route::get('/', 'HomeController@home')->name('home');

Route::post('/', 'UserController@store');


Route::get('/index', 'HomeController@index')->name('index');
Route::get('/products', 'ProductController@index')->name('products');
