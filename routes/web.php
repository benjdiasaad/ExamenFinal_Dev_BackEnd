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

Route::get('/blog', function () {
    return view('template.blog');
});

Route::get('/index',"OffreController@index")->name('template.index');

Route::get('/detail', function () {
    return view('template.blog-details');
});
/*
Route::get('/product', function () {
    return view('template.product');
});*/

Route::get('/product/{typlog}', 'OffreController@show')->name('template.product');

Route::get('/shop', function () {
    return view('template.shop');
});

Route::get('/product', function () {
    return view('template.product');
});

Route::get('/contact', function () {
    return view('template.contact');
});

