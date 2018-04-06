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

use App\Category;

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/home',function (){
    $categories = Category::all();
    return view('user.index',compact('categories'));
});*/

Route::resource('/user','UsersController');

Route::resource('/user/category','CategoriesController');