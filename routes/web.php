<?php

use App\Http\Controllers\Admin\PaketWisataController;
use App\Http\Controllers\Admin\PemesananController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\WisataController;
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

Route::get('/discover', function () {
    return view('client.discover');
})->name('discover');

Route::get('/detail', function () {
    return view('client.detail');
})->name('detail');

Route::get('/reservation', function () {
    return view('client.reservation');
})->name('reservation');

Route::middleware(['guest'])->group(function() {
    Route::get('/login', [UserController::class, 'login'])->name('login');
    Route::post('/store-login', [UserController::class, 'storeLogin'])->name('store-login');

    Route::get('/register', [UserController::class, 'register'])->name('register');

    Route::post('/store-register', [UserController::class, 'storeRegister'])->name('store-register');
});

Route::post('/logout', [UserController::class, 'logout'])->name('logout')->middleware(['auth']);

Route::middleware(['role','auth'])->prefix('admin')->group(function() {
    Route::get('/',function() {
        return view('admin.home');
    })->name('dashboard');

    Route::resources([
        'user' => AdminUserController::class,
        'wisata' => WisataController::class,
        'paket-wisata' => PaketWisataController::class,
        'review' => ReviewController::class,
        'pemesanan' => PemesananController::class
    ]);
    
});