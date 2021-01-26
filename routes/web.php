<?php

use Illuminate\Support\Facades\Route;


define('PAGINATION_COUNT','9');
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


Route::view('/test/index','admin.index');



Route::get('/{page}', 'App\Http\Controllers\AdminController@index');



//Route::view('/index','site.list')->name('login');
Route::view('/home','site.home');
Route::view('/about','site.about');
Route::view('/contact','site.contact');

