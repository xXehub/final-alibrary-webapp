<?php

use App\Http\Controllers\Client\LoginController;
use App\Http\Controllers\Client\RegisterController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisterController::class, 'index'])
        ->name('register');

    Route::post('register', [RegisterController::class, 'store']);

    Route::get('login', [LoginController::class, 'index'])
        ->name('login');

    Route::post('login', [LoginController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::any('logout', [LoginController::class, 'destroy'])
        ->name('logout');
});
