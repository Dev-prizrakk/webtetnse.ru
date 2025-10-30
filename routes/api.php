<?php
// Base
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\Auth\AuthController;
use App\Http\Controllers\Api\V1\Auth\PasswordController;
use App\Http\Controllers\Api\V1\Auth\EmailVerificationController;

use App\Http\Controllers\Api\V1\BlogController;
use App\Http\Controllers\Api\V1\RequestController;


// API Маршруты версии 1 (аутентификация, пароль, подтверждение email)
Route::prefix('/v1/auth')->group(function () {
    // Аутентификация
    Route::post('/registration', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);

    // Маршруты, требующие авторизации
    Route::middleware('auth.api')->group(function () {
        Route::delete('/logout', [AuthController::class, 'logout']);
        Route::get('/me', [AuthController::class, 'me']);
    });

    // Работа с паролем
    Route::post('/password/forgot', [PasswordController::class, 'forgot']);
    Route::post('/password/reset', [PasswordController::class, 'reset']);
    Route::post('/password/token-check', [PasswordController::class, 'tokenCheck']);

    // Подтверждение email
    Route::post('/email-verify/{user}', [EmailVerificationController::class, 'sendLink']);
    Route::post('/email-verify', [EmailVerificationController::class, 'verify']);
});

Route::prefix('/v1/blog')->group(function () {
    Route::get('/', [BlogController::class, 'index']);
    Route::get('/{id}', [BlogController::class, 'show']);
    Route::post('/', [BlogController::class, 'store']);
    Route::delete('/{id}', [BlogController::class, 'destroy']);
});

Route::prefix('v1/requests')->group(function () {
    Route::get('/', [RequestController::class, 'index']);
    Route::get('/{id}', [RequestController::class, 'show']);
    Route::post('/', [RequestController::class, 'store']);
    Route::patch('/{id}/status', [RequestController::class, 'updateStatus']);
    Route::delete('/{id}', [RequestController::class, 'destroy']);
});