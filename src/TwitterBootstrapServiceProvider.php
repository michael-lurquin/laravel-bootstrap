<?php

namespace BladeBootstrap\TwitterBootstrap;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use BladeBootstrap\TwitterBootstrap\Traits\BladeTwitterBootstrap;
use BladeBootstrap\TwitterBootstrap\Traits\Utils;

class TwitterBootstrapServiceProvider extends ServiceProvider
{
    use BladeTwitterBootstrap;
    use Utils;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('glyph', function ($expression) {

            return $this->glyph($expression);
        });

        Blade::directive('button', function ($expression) {

            list($label, $class, $glyph) = array_values($this->parseButtonExpressionBlade('button', $expression));

            return $this->button($label, $class, $glyph);
        });

        // Config
        $this->publishes([
            __DIR__ . '/config/laravel-bootstrap.php' => config_path('laravel-bootstrap.php'),
        ], 'config');

        $bootstrapVersion = "bootstrap-{$this->app->config['laravel-bootstrap.bootstrap-version']}-dist";

        // Resources
        $this->publishes([
            __DIR__ . "/resources/assets/{$bootstrapVersion}/css/bootstrap.min.css" => public_path('css/bootstrap.min.css'),
            __DIR__ . "/resources/assets/{$bootstrapVersion}/js/bootstrap.min.js" => public_path('js/bootstrap.min.js'),
            __DIR__ . "/resources/assets/{$bootstrapVersion}/fonts" => public_path('fonts'),

            __DIR__ . '/resources/views/layouts/master.blade.php' => resource_path('views/layouts/master.blade.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
