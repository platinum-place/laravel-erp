<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class MacroServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Route::macro('fullApiResource', function (string $name, string $controller) {
            Route::name("$name.")->prefix($name)->group(function () use ($name, $controller) {
                Route::get('/', [$controller, 'index'])->name('index');
                Route::post('/', [$controller, 'store'])->name('store');
                Route::get('/{id}', [$controller, 'show'])->name('show');
                Route::put('/{id}', [$controller, 'update'])->name('update');
                Route::patch('/{id}', [$controller, 'update'])->name('update');
                Route::delete('/{id}', [$controller, 'destroy'])->name('destroy');
                Route::put('{id}/restore', [$controller, 'restore'])->name('restore');
            });
        });
    }
}
