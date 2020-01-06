<?php

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

Route::middleware([App\Http\Middleware\HelloMiddleware::class])->group(function () {
    Route::get('/hello', 'HelloController@index');
    Route::get('/hello/other/{msg}', 'HelloController@other');
    Route::get('/hello/{person}', 'HelloController@detail');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/article', 'ArticleController');
