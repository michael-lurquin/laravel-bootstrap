<?php

namespace Lurquinm\LaravelBootstrap;

use Illuminate\Support\ServiceProvider;

class LaravelBootstrapServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/Resources/views', 'bootstrap');

        // Resources
        $bootstrapVersion = "bootstrap-3.3.7-dist";

        $this->publishes([
            __DIR__ . "/Resources/assets/{$bootstrapVersion}/css/bootstrap.min.css" => public_path('css/bootstrap.min.css'),
            __DIR__ . "/Resources/assets/{$bootstrapVersion}/js/bootstrap.min.js" => public_path('js/bootstrap.min.js'),
            __DIR__ . "/Resources/assets/{$bootstrapVersion}/fonts" => public_path('fonts'),

            __DIR__ . '/Resources/views/layouts/master.blade.php' => resource_path('views/layouts/master.blade.php'),
        ], 'views');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerBootstrapBuilder();

        $this->app->alias('bootstrap', 'Lurquinm\LaravelBootstrap\BootstrapBuilder');
    }

    /**
     * Register the bootstrap builder instance.
     *
     * @return void
     */
    protected function registerBootstrapBuilder()
    {
        $this->app->bind('bootstrap', function ($app) {
            return new BootstrapBuilder();
        });
    }
}
