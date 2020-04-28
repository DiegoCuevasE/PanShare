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

//Route::get('/homeAlmacen', 'HomeController@index')->name('home');

Route::get('/inicio', function () {
    return view('homeAlmacen');
});

Route::get('/compras', function () {
    return view('carroCompras');
});