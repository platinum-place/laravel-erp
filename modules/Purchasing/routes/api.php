<?php

use Illuminate\Support\Facades\Route;
use Modules\Authentication\app\Http\Controllers\UserController;

Route::middleware(['auth:sanctum'])->group(function () {
    Route::name('users.')->prefix('users')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::post('/', [UserController::class, 'store'])->name('store');
        Route::get('/{id}', [UserController::class, 'show'])->name('show');
        Route::put('/{id}', [UserController::class, 'update'])->name('update');
        Route::patch('/{id}', [UserController::class, 'update'])->name('update');
        Route::delete('/{id}', [UserController::class, 'destroy'])->name('destroy');
        Route::put('{id}/restore', [UserController::class, 'restore'])->name('restore');
    });
});
