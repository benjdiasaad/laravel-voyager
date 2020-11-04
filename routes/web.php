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



Route::get('/', "SiteController@index");
Route::get('/blog/{id?}', "SiteController@blog");
Route::get('/post/{slug}', "SiteController@show");


Route::get('/contact', function () {
    return view('blog.contact');
});


Route::get('/about', function () {
    return view('blog.about');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
