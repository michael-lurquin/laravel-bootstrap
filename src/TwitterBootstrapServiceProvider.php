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

    private $bootstrapVersion = 'bootstrap-3.3.7-dist';

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

            list($value, $class) = $this->parseExpressionBlade($expression);

            return $this->button($value, $class);
        });

        Blade::directive('buttonGlyph', function ($expression) {

            list($glyph, $class) = $this->parseExpressionBlade($expression);

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
