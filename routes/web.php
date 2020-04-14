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
//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();


Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    
    Route::resource('/users','UserController',['except'=>['show','create','store']]);
});
Route::match(['get','post'],'/products/add-product','ProductController@addProduct')->name('products.add-product')->middleware('can:manage-users');
Route::match(['get','post'],'/formDefination','FormDefinationController@index')->name('formDefination')->middleware('can:manage-users');
Auth::routes();
// Route::match(['get','post'],'/','indexController@index');

