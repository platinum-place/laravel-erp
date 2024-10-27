<?php

namespace modules\Billing\app\Providers\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
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
        Route::prefix('billing/api')
            ->middleware('api')
            ->group(__DIR__.'/../../routes/api.php');
    }
}
