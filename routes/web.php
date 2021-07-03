<?php

use App\Http\Controllers\UserController;
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

Route::get('/admin',function() {
    return view('admin.home');
})->name('dashboard')->middleware(['role','auth']);

Route::get('/discover', function () {
    return view('client.discover');
})->name('discover');

Route::get('/detail', function () {
    return view('client.detail');
})->name('detail');

Route::get('/reservation', function () {
    return view('client.reservation');
})->name('reservation');

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware(['guest']);
Route::post('/store-login', [UserController::class, 'storeLogin'])->name('store-login')->middleware(['guest']);

Route::get('/register', [UserController::class, 'register'])->name('register')->middleware(['guest']);

Route::post('/store-register', [UserController::class, 'storeRegister'])->name('store-register')->middleware(['guest']);

Route::post('/logout', [UserController::class, 'logout'])->name('logout');