<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\MainController;
use Illuminate\Support\Facades\Auth;



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

Route::get('logout' ,function (){
    Auth::logout();
    return redirect()->route('get.front.login');
})->name('user-logout');
Route::get('/',[MainController::class,'getHome'])->name('get.home');

Route::group(['namespace'=>'App\Http\Controllers\Front'],function (){
    Route::get('login','LoginController@getUserLogin_register')->name('get.front.login');
    Route::post('logins','LoginController@Login')->name('front.login');
    Route::post('register','LoginController@register')->name('front.register');

});



Route::group(['namespace'=>'App\Http\Controllers\Front','middleware'=>'auth:web'],function (){
    Route::get('categories','MainController@getCat')->name('get.cat');
    Route::get('categories/{id}','MainController@getCatWithID')->name('get.cat.id');
    Route::get('detailsPage/{id}','MainController@getDetailsPage')->name('details.page');
    Route::post('addOrders/{id}','MainController@AddOrder')->name('Add.orders');
    Route::get('cart','MainController@geCartPage')->name('cart.show');
    Route::get('delete/{id}','MainController@deletOrder')->name('delete.order');
    Route::post('update','MainController@EditOrder')->name('cart.update');

});


