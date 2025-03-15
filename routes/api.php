<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CountryController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::get('/countries', [CountryController::class, 'index']);
    Route::get('/countries/{id}', [CountryController::class, 'show']);

    Route::middleware('auth:sanctum')->group(function () {
        // ...existing routes...
        Route::post('/countries', [CountryController::class, 'store']);
        Route::delete('/countries/{id}', [CountryController::class, 'destroy'])->middleware('auth:sanctum');
    });

    
});