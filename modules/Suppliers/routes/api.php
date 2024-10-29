<?php

use Illuminate\Support\Facades\Route;
use Modules\Authentication\app\Http\Controllers\UserController;
use Modules\Suppliers\app\Http\Controllers\ProductTypeController;
use Modules\Suppliers\app\Http\Controllers\VendorController;

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/product-types', ProductTypeController::class);

    Route::name('vendors.')->prefix('vendors')->group(function () {
        Route::get('/', [VendorController::class, 'index'])->name('index');
        Route::post('/', [VendorController::class, 'store'])->name('store');
        Route::get('/{id}', [VendorController::class, 'show'])->name('show');
        Route::put('/{id}', [VendorController::class, 'update'])->name('update');
        Route::patch('/{id}', [VendorController::class, 'update'])->name('update');
        Route::delete('/{id}', [VendorController::class, 'destroy'])->name('destroy');
        Route::put('{id}/restore', [VendorController::class, 'restore'])->name('restore');
    });
});
