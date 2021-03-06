<?php

//use文をMiddlewareで使ってみる（書籍に記載なし）
use App\Http\Middleware\HelloMiddleware;

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

// Route::middleware([App\Http\Middleware\HelloMiddleware::class])->group(function(){
// Route::middleware([HelloMiddleware::class])->group(function(){
// Route::get('/hello', 'HelloController@index');
// Route::get('/hello/other', 'HelloController@other');
// });

Route::get('/hello', 'HelloController@index')->name('hello');
//P164のHelloController@otherのルート追加（順番注意！）
Route::get('/hello/other', 'HelloController@other');
//P165のHelloController@jsonのルート追加
Route::get('/hello/json', 'HelloController@json');
Route::get('/hello/json/{id}', 'HelloController@json');
Route::get('/hello/{id}', 'HelloController@index');
Route::get('/hello/{id}/{name}', 'HelloController@save');

