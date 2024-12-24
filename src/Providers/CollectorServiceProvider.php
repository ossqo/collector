<?php

namespace Ossqo\Collector\Providers;

use Illuminate\Support\ServiceProvider;
use Ossqo\Collector\Console\Commands\BrandCommand;

class CollectorServiceProvider extends ServiceProvider
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
        $this->loadRoutesFrom(__DIR__.'/../routes/collector.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'collector');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/collector'),
        ]);

        $this->publishes([
            __DIR__.'/../config/collector.php' => config_path('collector.php'),
        ]);

        if ($this->app->runningInConsole()) {
            $this->commands([
                BrandCommand::class,
            ]);
        }
    }
}
