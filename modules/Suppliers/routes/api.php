<?php

use Illuminate\Support\Facades\Route;
use Modules\Authentication\app\Http\Controllers\UserController;
use Modules\Suppliers\app\Http\Controllers\ProductTypeController;
use Modules\Suppliers\app\Http\Controllers\SupplierController;

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/product-types', ProductTypeController::class);

    Route::name('vendors.')->prefix('vendors')->group(function () {
        Route::get('/', [SupplierController::class, 'index'])->name('index');
        Route::post('/', [SupplierController::class, 'store'])->name('store');
        Route::get('/{id}', [SupplierController::class, 'show'])->name('show');
        Route::put('/{id}', [SupplierController::class, 'update'])->name('update');
        Route::patch('/{id}', [SupplierController::class, 'update'])->name('update');
        Route::delete('/{id}', [SupplierController::class, 'destroy'])->name('destroy');
        Route::put('{id}/restore', [SupplierController::class, 'restore'])->name('restore');
    });
});
