<?php

use App\Http\Controllers\test as ControllersTest;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\test;

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



Route::get('/','App\Http\Controllers\test@home')->name('home');
Route::get('/about','App\Http\Controllers\test@about')->name('about');
Route::get('/doctors','App\Http\Controllers\test@doctors')->name('doctors');
Route::get('/news','App\Http\Controllers\test@news')->name('news');
Route::get('/protect','App\Http\Controllers\test@protct')->name('protect');
Route::get('/welcome','App\Http\Controllers\test@welcome')->name('welcome');
Route::get('/vistors','App\Http\Controllers\test@vistors')->name('vistors');
 
Route::get('/{id}',[Test::class,'shownews'])->name('shownews');
Route::get('/delete/{id}',[Test::class,'delete'])->name('delete');


Route::get('/img/{img}','App\Http\Controllers\test@getimg')->name('getimg');
#http://ss-covid19-bi.herokuapp.com/img/covid.gif
