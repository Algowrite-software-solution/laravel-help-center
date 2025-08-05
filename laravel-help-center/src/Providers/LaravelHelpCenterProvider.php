<?php

namespace Algowrite\LaravelHelpCenter\Providers;

use Illuminate\Support\ServiceProvider;

class LaravelHelpCenterProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/laravel-help-center.php',
            'laravel-help-center-package'
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../../config/laravel-help-center.php' => config_path('laravel-help-center.php'),
            ], 'laravel-help-center-config');

            $this->publishes([
                __DIR__ . '/../../database/migrations/' => database_path('migrations'),
            ], 'laravel-help-center-migrations');


            $this->publishes([
                __DIR__ . '/../../database/seeders' => database_path('seeders'),
            ], 'laravel-help-center-seeders');
        }

        // In TestPackageServiceProvider.php boot() method
        $router = $this->app->make(\Illuminate\Routing\Router::class);
        $router->aliasMiddleware('laravel-help-center-middleware', \Algowrite\LaravelHelpCenter\Http\Middleware\LaravelHelpCenterMiddleware::class);
    }
}