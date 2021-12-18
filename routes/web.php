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
    return view('index');
});

Route::get('/buttons', function () {
    return view('pages.componen.button');
});

Route::get('/cards', function () {
    return view('index');
});

Route::get('/utilities-color', function () {
    return view('index');
});

Route::get('/utilities-border', function () {
    return view('index');
});

Route::get('/products', function () {
    return view('pages.product.index');
});
