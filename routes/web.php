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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello',['name'=> "hello World"]);
});

Route::get('/msg/getDB','App\Http\Controllers\MsgController@getDB');

Route::get('/msg/getProduct','App\Http\Controllers\Table1Controller@getProduct');

Route::get('/msg/getALLTable1','App\Http\Controllers\DBtestController@getALLTable1');

Route::get('/laraEC','App\Http\Controllers\ProductController@getProduct')->name('ProductList');

Route::get('/laraEC/getProductDetail','App\Http\Controllers\ProductController@getProductDetail')->name('ProductDetail');

Route::get('/laraEC/addCart','App\Http\Controllers\ProductController@addCart')->name('addCart');

Route::get('/laraEC/delCartAll','App\Http\Controllers\ProductController@delCartAll')->name('delCartAll');

Route::get('/laraEC/delCartDetail','App\Http\Controllers\ProductController@delCartDetail')->name('delCartDetail');

Route::get('/laraEC/viewCart','App\Http\Controllers\ProductController@viewCart')->name('viewCart');

Route::get('/laraEC/search','App\Http\Controllers\ProductController@search')->name('search');

