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

Route::get('/', function() {
    return view('client.home');
})->name('home');

Route::get('/discover', function () {
    return view('client.discover');
})->name('discover');

Route::get('/detail', function () {
    return view('client.detail');
})->name('detail');

Route::get('/reservation', function () {
    return view('client.reservation');
})->name('reservation');