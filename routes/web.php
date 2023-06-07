<?php

use App\Events\MessageCreated;
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


Route::get('/panduan', function () {
    return view('users.panduan');
});
Route::get('/history', function () {
    return view('admin.history');
});
// Route::get('/home', function () {
//     return view('users.index');
// });
// Route::get('/notification/{id}', 'ProductController@detailNotif');

Route::get('/products/{id}', 'ProductController@detail')->middleware('auth');

Route::get('/registertoko', 'RegisterTokoController@index')->middleware('auth');
Route::post('/registertoko', 'RegisterTokoController@store');

Route::get('/register', 'RegisterController@index');
Route::post('/register', 'RegisterController@store');
Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@authenticate');
Route::post('/logout', 'LoginController@logout');

Route::get('/profile', 'TokoController@profile');
Route::get('/edit-profile/{id}', 'TokoController@editProfile')->name('profile.edit')->middleware(('auth'));
Route::put('/edit-product/{id}', 'TokoController@updateProfile')->name('profile.update')->middleware('auth');
Route::post('/storeprofile', 'TokoController@storeProfile')->middleware('auth');

Route::get('/dashboard', 'TokoController@index')->middleware('auth');
Route::get('/report', 'TokoController@report')->middleware('auth');
Route::get('/history', 'TokoController@historyOrder')->middleware('auth');
Route::get('/detail-order/{uName}', 'TokoController@historyDetail')->middleware('auth');

Route::get('/home', 'ProductController@index');

Route::get('/mg-produk-edit/{id}', 'TokoController@edit')->name('product.edit')->middleware('auth');
Route::get('/mg-produk-delete/{id}', 'TokoController@removeProduct')->name('product.delete')->middleware('auth');
Route::put('/mg-produk-update/{id}', 'TokoController@update')->name('product.update')->middleware('auth');

Route::get('/createproduct', 'TokoController@create')->middleware('auth');
Route::post('/storeproduct', 'TokoController@store')->middleware('auth');

Route::get('/shop', 'ShopController@index');
Route::get('/kategori', 'KategoriController@index');
Route::get('/kategori/{id}', 'KategoriController@detailKategori');

Route::get('/notification', 'NotifikasiController@index')->middleware('auth');

Route::get('/seragam', 'SeragamController@index');

Route::resource('/', 'ProductController')->name('index', 'main');
// cart
Route::get('/cart', 'CartController@cart')->middleware('auth');
Route::post('/add-to-cart/{id}', 'CartController@addToCart')->middleware('auth');
Route::get('/remove-from-cart/{id}', 'CartController@removeFromCart');

// // checkout
