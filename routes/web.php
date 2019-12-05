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

Route::resource('book', 'BookController');

Route::resource('CD', 'CDController');

Route::resource('shop', 'ShopController');

// Route::resource('shopcart', 'ShopCartController');

Route::get('shopcart', 'ShopCartController@index')->name('shopcart.index');

Route::post('shopcart/{id}', 'ShopCartController@addToCart')->name('shopcart.addToCart');
