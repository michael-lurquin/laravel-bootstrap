<?php

namespace Lurquinm\LaravelBootstrap;

use Lurquinm\LaravelBootstrap\Traits\Utils;

class BootstrapBuilder
{
    use Utils;

    const SPACE = '&nbsp;';

    public function glyph($glyph)
    {
        $attributes['class'] = "glyphicon glyphicon-{$glyph}";
        $attributes['aria-hidden'] = 'true';

        return view('bootstrap::glyph')->withAttributes($this->attributes($attributes));
    }

    public function button($label = '', $class = 'default', $options = [])
    {
        $attributesDefault['type'] = 'button';
        $attributesDefault['class'] = 'btn btn-' . $class;

        if ( !empty($options['glyph']) )
        {
            if ( !empty($label) )
            {
                $label = self::SPACE . $label;
            }

            $label = PHP_EOL . $this->glyph($options['glyph']) . $label . PHP_EOL;

            unset($options['glyph']);
        }

        $attributes = $attributesDefault + $options;

        return view('bootstrap::button', compact('label'))->withAttributes($this->attributes($attributes));
    }
}
