<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view ('index');
});

Route::get('/tienda', function () {
    return view ('tienda');
});


Route::get('/layout', function () {
    return view ('layout');
});

Route::get('/portofino', function () {
    return view ('portofino');
});

Route::get('/purosangue', function () {
    return view ('purosangue');
});

Route::get('/spider', function () {
    return view ('spider');
});

Route::get('/revuelto', function () {
    return view ('revuelto');
});

Route::get('/sesto', function () {
    return view ('sesto');
});

Route::get('/urus', function () {
    return view ('urus');
});

Route::get('/911ca', function () {
    return view ('911ca');
});

Route::get('/718box', function () {
    return view ('718box');
});

Route::get('/718cay', function () {
    return view ('718cay');
});

Route::get('/about', function () {
    return view ('about');
});

Route::get('/noticia1', function () {
    return view ('noticia1');
});

Route::get('/noticia2', function () {
    return view ('noticia2');
});

Route::get('/noticia3', function () {
    return view ('noticia3');
});



