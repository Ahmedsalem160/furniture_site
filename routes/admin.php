<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\ProductsController;

//define('PAGINATION_COUNT','9');

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

//Route::view('/product','admin.product.create');

Route::get('/{page}', 'App\Http\Controllers\AdminController@index');


Route::get('/login','App\Http\Controllers\AdminController@login')->name('getAdminLogin');
Route::post('/logged','App\Http\Controllers\AdminController@logged')->name('adminLogin');
############Category-CRUD#################
Route::group(['prefix'=>'category'],function () {
    Route::get('/create',[CategoryController::class,'create'])->name('category-create');
    Route::post('/create',[CategoryController::class,'store'])->name('category-save');
    Route::get('/show',[CategoryController::class,'index'])->name('category-show');

});

############Sud-Category-CRUD#################
Route::group(['prefix'=>'subcategory'],function () {
    Route::get('/create/{id}',[SubCategoryController::class,'create'])->name('sub-category-create');
    Route::post('/created/{id}',[SubCategoryController::class,'store'])->name('sub-category-save');
    Route::get('/show/{id}',[SubCategoryController::class,'index'])->name('sub-category-show');

});


############products-CRUD#################
Route::group(['prefix'=>'products'],function () {
    Route::get('/create/{id}',[ProductsController::class,'create'])->name('product-create');
    Route::post('/created/{id}',[ProductsController::class,'store'])->name('product-save');
    Route::get('/show/{id}',[ProductsController::class,'index'])->name('product-show');
    Route::get('/edit/{id}',[ProductsController::class,'edit'])->name('product-edit');
    Route::post('/updated/{id}',[ProductsController::class,'update'])->name('product-update');
    Route::get('/delete/{id}',[ProductsController::class,'destroy'])->name('product-delete');
    //Route::get('/show/{id}',[ProductsController::class,'show'])->name('product-detail');
});
