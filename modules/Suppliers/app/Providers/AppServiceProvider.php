<?php

namespace modules\Suppliers\app\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Lang;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->register(RouteServiceProvider::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');

        $this->loadTranslationsFrom(__DIR__.'/../../lang', 'suppliers');
    }
}
