<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Authentication\app\Http\Controllers\ClientController;
use Modules\Authentication\app\Http\Controllers\UserController;

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::fullApiResource('users', UserController::class);
    Route::fullApiResource('clients', ClientController::class);
});
