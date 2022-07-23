<?php

namespace Mdhesari\LaravelViews;

use Illuminate\Support\ServiceProvider;

class LaravelViewsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'laravel-views');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-views');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ( $this->app->runningInConsole() ) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('laravel-views.php'),
            ], 'config');

            // Publishing the migrations.
            $this->publishes([
                __DIR__.'/../database/migrations' => database_path('migrations'),
            ], 'migrations');

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/laravel-views'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/laravel-views'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laravel-views');

        // Register the main class to use with the facade
        $this->app->singleton('laravel-views', function () {
            return new LaravelViews;
        });
    }
}
