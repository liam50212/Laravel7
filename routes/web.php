<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
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
    return view('index');
});

Route::prefix('news')->group(function () {
    Route::get('/','FrontController@newsIndex');
    Route::get('/content/{id}','FrontController@newsContent');    
});

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::prefix('news')->group(function () {
        Route::get('/','NewsController@index');
        Route::get('/create','NewsController@create');
        Route::post('/store','NewsController@store');
        Route::get('/edit/{id}','NewsController@edit');
        Route::post('/update/{id}','NewsController@update');
        Route::get('/delete/{id}','NewsController@delete');
    });
});
// product
Route::prefix('products')->group(function () {
    Route::get('/','FrontController@productsIndex');
    Route::get('/content/{id}','FrontController@productsContent');    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
