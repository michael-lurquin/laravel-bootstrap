<?php

namespace BladeBootstrap\TwitterBootstrap\Traits;

use Illuminate\Support\Facades\Blade;
use BladeBootstrap\TwitterBootstrap\Traits\BladeTwitterBootstrap;
use BladeBootstrap\TwitterBootstrap\Traits\Utils;

trait DirectivesBlade
{
    use BladeTwitterBootstrap;
    use Utils;

    public function registerDirectivesBlade()
    {
        Blade::directive('glyph', function ($expression) {

            $glyph = $this->parseExpressionBlade($expression);

            return $this->glyph($glyph);
        });

        Blade::directive('button', function ($expression) {

            list($label, $class, $glyph, $size) = array_values($this->parseExpressionBlade($expression, 'button'));

            return $this->button($label, $class, $glyph, $size);
        });

        Blade::directive('alert', function($expression) {

            list($class, $glyph, $message, $title) = array_values($this->parseExpressionBlade($expression, 'alert'));

            return $this->alert($class, $glyph, $message, $title);
        });
    }
}
