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
    return view('index');
});

Route::get('news','NewsController@index');

Route::get('news/create','NewsController@create');

Route::post('news/store','NewsController@store');

Route::get('news/edit','NewsController@edit');

Route::get('news/update/{id}','NewsController@update');

Route::get('news/delete/{id}','NewsController@delete');

Route::get('news/detail/{id}','NewsController@detail');


// Route::get('news/detail', function () {
//     return view('/news/index3');
// });

Route::get('test', function () {

    $data = '123';
    // return view('test',['data'=>$data]);
    // return view('test')->with('data,$data');
    // dd(compact('data'));
    return view('test',compact('data'));
});

Route::get('lesson1',function(){

    // $ 變數名稱
    // 字串 string
    // 整數 integer
    // 浮點數 double
    // 布林值 boolean
    // 陣列 array
    // $data = ['a'=>123,'b'=>456];
    // dd(gettype($data));
    // $num1 = 5;
    // $num2 = 2;

    // 指派運算子 = += -=
    // 算術運算值 + - * ** %
    // 字串相加使用 .
    // 比較運算子 > <  >= <= == != <>
    // 邏輯運算子 %% || ! and or xor


    // if(){}
    // elseif(){}
    // else{}

    // dd($num1.$num2);

    // return 'hello world!!';
});
