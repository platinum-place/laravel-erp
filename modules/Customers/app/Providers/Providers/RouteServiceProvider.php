<?php

namespace modules\Customers\app\Providers\Providers;

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
        Route::prefix('customers/api')
            ->middleware('api')
            ->group(__DIR__.'/../../routes/api.php');
    }
}
