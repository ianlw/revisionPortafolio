<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
    if (env('APP_ENV') !== 'local') { // Solo fuerza HTTPS en entornos que no sean 'local'
        URL::forceScheme('https');
    }
    }
}
