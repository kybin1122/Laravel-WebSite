<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index');
Route::get('/trangchu', 'HomeController@index');
Route::get('/admin', 'AdminController@login_page');
Route::get('/cart', 'CartController@cart_page');
Route::get('/bolg', 'BolgController@bolg_page');
Route::get('/bolgSingle', 'BolgSingleController@bolgSingle_page');
Route::get('/login', 'LoginController@login1_page');
Route::get('/checkout', 'CheckoutController@checkout_page');
Route::get('/contact', 'ContactController@contact_page');
Route::get('/detail', 'DetailController@detail_page');
Route::get('/product', 'ShopController@shop_page');