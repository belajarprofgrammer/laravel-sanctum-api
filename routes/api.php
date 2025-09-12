<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->group(function () {
    Route::post('register', [AuthController::class, 'register'])
        ->name('register');
    Route::post('login', [AuthController::class, 'login'])
        ->name('login');

    Route::middleware('auth:sanctum')->group(function () {
        Route::get('me', [AuthController::class, 'me'])
            ->name('me');
        Route::delete('logout', [AuthController::class, 'logout'])
            ->name('logout');
    });
});
