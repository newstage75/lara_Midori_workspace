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

Route::get('/hello', 'HelloController@index');
    // ->middleware(App\Http\Middleware\MyMiddleware::class);
Route::get('/hello/{id}', 'HelloController@index');
    // ->middleware(App\Http\Middleware\MyMiddleware::class);
