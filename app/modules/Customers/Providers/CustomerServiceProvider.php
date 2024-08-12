<?php

namespace Customers\Providers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class CustomerServiceProvider extends ServiceProvider
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
        $moduleName = basename(dirname(__DIR__, 1));
        config([
            $moduleName => require __DIR__ . '/../config/route.php'
        ]);

        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', $moduleName);
        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', $moduleName);
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');


    }
}
