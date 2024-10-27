<?php

use Illuminate\Support\Facades\Route;
use Modules\Authentication\app\Http\Controllers\UserController;
use Modules\Suppliers\app\Http\Controllers\ProductTypeController;

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/product-types', ProductTypeController::class);
});
