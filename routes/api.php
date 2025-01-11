<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

// Grup rute yang memerlukan autentikasi JWT
Route::middleware('auth:api')->group(function () {
    // Menggunakan API resource untuk TaskController
    Route::apiResource('tasks', TaskController::class);
});
