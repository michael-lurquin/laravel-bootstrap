<?php

namespace BladeBootstrap\TwitterBootstrap;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use BladeBootstrap\TwitterBootstrap\Traits\BladeTwitterBootstrap;

class TwitterBootstrapServiceProvider extends ServiceProvider
{
    use BladeTwitterBootstrap;

    private $bootstrapVersion = 'bootstrap-3.3.7-dist';

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('glyph', function ($glyph) {
            return $this->glyph($glyph);
        });

        Blade::directive('button', function ($value, $class = 'default') {
            return $this->button($value, $class);
        });

        Blade::directive('buttonGlyph', function ($glyph, $class = 'default') {
            return $this->buttonGlyph($glyph, $class);
        });

        // Resources
        $this->publishes([
            __DIR__ . "/resources/assets/{$this->bootstrapVersion}/css/bootstrap.min.css" => public_path('css/bootstrap.min.css'),
            __DIR__ . "/resources/assets/{$this->bootstrapVersion}/js/bootstrap.min.js" => public_path('js/bootstrap.min.js'),
            __DIR__ . "/resources/assets/{$this->bootstrapVersion}/fonts" => public_path('fonts'),

            __DIR__ . "/resources/views/layouts/master.blade.php" => resource_path('views/layouts/master.blade.php'),
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
