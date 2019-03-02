<?php

namespace Shetabit\Components;

use Illuminate\Support\ServiceProvider;

class ComponentsServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'shetabit');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'shetabit-components');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }

        if (file_exists($file = __DIR__.'/Helpers/functions.php')) {
            require $file;
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/components.php', 'components');

        // Register the service the package provides.
        $this->app->singleton('components', function ($app) {
            return new components;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['components'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/components.php' => config_path('components.php'),
        ], 'components.config');

        // Publishing the views.
        $this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/shetabit-components'),
        ], 'components.views');

        // Publishing assets.
        $this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/shetabit-components/assets'),
        ], 'components.views');

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/shetabit'),
        ], 'components.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
