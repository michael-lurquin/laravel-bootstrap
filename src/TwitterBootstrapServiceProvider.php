<?php

namespace BladeBootstrap\TwitterBootstrap;

use Illuminate\Support\ServiceProvider;
use BladeBootstrap\TwitterBootstrap\Traits\DirectivesBlade;

class TwitterBootstrapServiceProvider extends ServiceProvider
{
    use DirectivesBlade;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Register diretives Blade
        $this->registerDirectivesBlade();

        // Resources
        $bootstrapVersion = "bootstrap-3.3.7-dist";

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
