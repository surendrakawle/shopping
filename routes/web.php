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
Route::match(['get','post'],'/formDefination','FormDefinationController@index')->name('formDefination')->middleware('can:manage-users');
/* CATALOGUE ROUTE */
Route::resource('catalogue', 'CatelogController');
Route::match(['get', 'post'], 'get-catalogues','CatelogController@getCatalogue')->name('get-catalogues');
Route::resource('home', 'HomeController');
/* CATEGORY ROUTE */
Route::resource('category', 'CategoryController');
Route::match(['get', 'post'], 'get-category','CategoryController@getCategory')->name('get-category');
/* PRODUCT ROUTE */
Route::resource('product', 'ProductController');
Route::match(['get', 'post'], 'get-product','ProductController@getProduct')->name('get-product');


Route::get('/productdesc', function () {
    return view('product_desc');
})->name('productdesc');
Route::get('/order', function () {
    return view('order');
})->name('order');
Route::get('/wishlist', function () {return view('wishlist');})->name('wishlist');
Route::get('/faq',function (){ return view('faq'); })->name('faq');
