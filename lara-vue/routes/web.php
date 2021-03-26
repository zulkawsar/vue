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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get("/categories/get", "Admin\CategoryController@getCategory")->name("category.get");
Route::get("/categories/{any?}", "Admin\CategoryController@index")->name("category.index")->where('any', '.*');
Route::post("/categories/store", "Admin\CategoryController@store")->name("category.store");
Route::delete("/categories/{id}", "Admin\CategoryController@destroy");

// Route::resource('categories', 'Admin\CategoryController');
// Route::resource('posts', 'Admin\PostController');
