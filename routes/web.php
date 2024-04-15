<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\WilayahController;
use App\Http\Controllers\WaktuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataABController;
use App\Http\Controllers\DataXController;
use App\Http\Controllers\DataYController;
use App\Http\Controllers\DataZController;
use App\Http\Controllers\DistributorController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register_action', [AuthController::class, 'register_action'])->name('register_action');
Route::post('/login_action', [AuthController::class, 'login_action'])->name('login_action');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resources([
        'wilayahs' => WilayahController::class,
        'waktus' => WaktuController::class,
        'data_x' => DataXController::class,
        'data_y' => DataYController::class,
        'data_z' => DataZController::class,
        'data_ab' => DataABController::class,
    ]);
});
