<?php

use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\LogoutController;
use App\Http\Controllers\Api\LevelController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Authentication Routes
Route::post('/register', RegisterController::class)->name('register');
Route::post('/login', LoginController::class)->name('login');
Route::post('/logout', LogoutController::class)->name('logout');

// Level Routes
Route::post('/levels', [LevelController::class, 'store']);
Route::get('/levels', [LevelController::class, 'index']);
Route::get('/levels/{id}', [LevelController::class, 'show']);
Route::put('/levels/{id}', [LevelController::class, 'update']);
Route::delete('/levels/{id}', [LevelController::class, 'destroy']);

// Protected Routes
Route::middleware('auth:api')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});