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

Route::post('/contact/store','ContactController@store');

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

Route::prefix('shopping_cart')->group(function () {
    Route::post('/add','ShoppingCartContorller@add');
    Route::post('/delete','ShoppingCartContorller@delete');
    Route::post('/update','ShoppingCartContorller@update');
    
    Route::get('/list','ShoppingCartContorller@list');
    Route::get('/payment','ShoppingCartContorller@payment');
    Route::post('/paymentCheck','ShoppingCartContorller@paymentCheck');

});

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::prefix('products')->group(function () {
        Route::get('/','ProductsController@index');
        Route::get('/create','ProductsController@create');
        Route::post('/store','ProductsController@store');
        Route::get('/edit/{id}','ProductsController@edit');
        Route::post('/update/{id}','ProductsController@update');
        Route::get('/delete/{id}','ProductsController@delete');
        Route::post('/delete_img','ProductsController@delete_img');
    });
});

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::prefix('product_type')->group(function () {
        Route::get('/','ProductTypeController@index');
        Route::get('/create','ProductTypeController@create');
        Route::post('/store','ProductTypeController@store');
        Route::get('/edit/{id}','ProductTypeController@edit');
        Route::post('/update/{id}','ProductTypeController@update');
        Route::get('/delete/{id}','ProductTypeController@delete');
    });
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
