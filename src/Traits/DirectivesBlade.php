<?php

namespace BladeBootstrap\TwitterBootstrap\Traits;

use Illuminate\Support\Facades\Blade;
use BladeBootstrap\TwitterBootstrap\Traits\BladeTwitterBootstrap;
use BladeBootstrap\TwitterBootstrap\Traits\Utils;
use Illuminate\Support\Str;

trait DirectivesBlade
{
    use BladeTwitterBootstrap;
    use Utils;

    public function registerDirectivesBlade()
    {
        Blade::directive('glyph', function ($expression) {

            $arguments = $this->parse($expression);

            list($glyph, $args) = $this->getArguments($arguments);

            return $this->glyph($glyph, $args);
        });

        Blade::directive('button', function($expression) {

            $arguments = $this->parse($expression);

            list($label, $args) = $this->getArguments($arguments);
            return $this->button($label, $args);
        });
    }
}
