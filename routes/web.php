<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\HouseProductController;
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

// dd('test');

Route::middleware('guest')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('product', [HomeController::class, 'product'])->name('product');
    Route::get('about', [HomeController::class, 'about'])->name('about');
    Route::get('contact', [HomeController::class, 'contact'])->name('contact');
    // Auth Login
    Route::prefix('login')->name('login.')->group(function () {
        Route::get('/', [AuthController::class, 'loginIndex'])->name('index');
        Route::post('store', [AuthController::class, 'loginStore'])->name('store');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Setting
    Route::prefix('setting')->name('setting.')->group(function () {
        Route::get('/', [SettingController::class, 'index'])->name('index');
        Route::post('store', [SettingController::class, 'store'])->name('store');
        Route::get('{id}/edit', [SettingController::class, 'edit'])->name('edit');
        Route::put('{id}/update', [SettingController::class, 'update'])->name('update');
        Route::delete('{id}/destroy', [SettingController::class, 'destroy'])->name('destroy');
    });

    // Setting Post
    Route::prefix('houseProduct')->name('houseProduct.')->group(function () {
        Route::get('/', [HouseProductController::class, 'index'])->name('index');
        Route::post('store', [HouseProductController::class, 'store'])->name('store');
    });
});