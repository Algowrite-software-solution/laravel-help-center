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
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../../config/laravel-help-center.php' => config_path('laravel-help-center.php'),
            ], 'laravel-help-center-config');

            $this->publishes([
                __DIR__ . '/../../database/migrations/' => database_path('migrations'),
            ], 'laravel-help-center-migrations');


            $this->publishes([
                // Controller
                __DIR__ . '/../../src/Http/Controllers/LaravelHelpCenterController.php' => app_path('Http/Controllers/Vendor/LaravelHelpCenter/LaravelHelpCenterController.php'),

                // Model
                __DIR__ . '/../../src/Models/LaravelHelpCenterModel.php' => app_path('Models/Vendor/LaravelHelpCenter/LaravelHelpCenterModel.php'),

                // Middleware
                __DIR__ . '/../../src/Http/Middleware/LaravelHelpCenterMiddleware.php' => app_path('Http/Middleware/Vendor/LaravelHelpCenter/LaravelHelpCenterMiddleware.php'),

            ], 'laravel-help-center-code');

        }


        $router = $this->app->make(\Illuminate\Routing\Router::class);
        $router->aliasMiddleware('laravel-help-center-middleware', \Algowrite\LaravelHelpCenter\Http\Middleware\LaravelHelpCenterMiddleware::class);
    }
}