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

Route::get('/profile', function () {
    return view('welcome');
})->name('profile');
Route::get('/', 'HomeController@index')->name('/');

Auth::routes();


Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){

    Route::resource('/users','UserController',['except'=>['show','create','store']]);
});
Route::match(['get','post'],'/products/add-product','ProductController@addProduct')->name('products.add-product')->middleware('can:manage-users');
Route::match(['get','post'],'/formDefination','FormDefinationController@index')->name('formDefination')->middleware('can:manage-users');
Route::resource('category', 'CategoryController');
Route::resource('catelogue', 'CatelogController');
Route::resource('home', 'HomeController');
// Route::match(['get','post'],'/','indexController@index');

Route::get('/productdesc', function () {
    return view('product_desc');
})->name('productdesc');
Route::get('/order', function () {
    return view('order');
})->name('order');
Route::get('/wishlist', function () {return view('wishlist');})->name('wishlist');
Route::get('/faq',function (){ return view('faq'); })->name('faq');
