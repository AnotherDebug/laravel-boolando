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
    return view('home');
})->name('home');

Route::get('/moda-donna', function () {
    return view('woman');
})->name('woman');

Route::get('/moda-uomo', function () {
    return view('man');
})->name('man');

Route::get('/moda-bambino', function () {
    return view('children');
})->name('children');
