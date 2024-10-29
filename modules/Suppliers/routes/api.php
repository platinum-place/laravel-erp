<?php

use Illuminate\Support\Facades\Route;
use Modules\Suppliers\app\Http\Controllers\AgentController;
use Modules\Suppliers\app\Http\Controllers\ProductTypeController;
use Modules\Suppliers\app\Http\Controllers\VendorController;

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/product-types', ProductTypeController::class);

    Route::fullApiResource('vendors', VendorController::class);
    Route::fullApiResource('agents', AgentController::class);
});
