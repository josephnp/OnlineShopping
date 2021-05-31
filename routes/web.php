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

Auth::routes();

Route::group(["middleware" => ["auth", "admin"]], function(){
    Route::get('/', 'ProductController@index');
    Route::get('/create', 'ProductController@create');
    Route::post('/stores', 'ProductController@store');
    Route::get('/update/{id}', 'ProductController@edit');
    Route::put('/update/{id}', 'ProductController@update');
    Route::delete('/delete/{id}', 'ProductController@destroy');
    Route::get('/category', 'CategoryController@index');
    Route::post('/category', 'CategoryController@store');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add/{id}', 'HomeController@add');
Route::get('/checkout', 'HomeController@checkout');
Route::post('/confirm', 'HomeController@confirm');