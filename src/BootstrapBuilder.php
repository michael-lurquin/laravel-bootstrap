<?php

namespace Lurquinm\LaravelBootstrap;

use Lurquinm\LaravelBootstrap\Traits\Utils;

class BootstrapBuilder
{
    use Utils;

    public function glyph($glyph)
    {
        $attributes['class'] = "glyphicon glyphicon-{$glyph}";
        $attributes['aria-hidden'] = 'true';

        return "<span {$this->attributes($attributes)}></span>";
    }

    public function button($label = '', $class = 'default', $options = [])
    {
        $attributesDefault['type'] = 'button';
        $attributesDefault['class'] = 'btn btn-' . $class;

        if ( !empty($options['glyph']) )
        {
            if ( !empty($label) )
            {
                $label = "&nbsp;{$label}";
            }

            $label = PHP_EOL . $this->glyph($options['glyph']) . $label . PHP_EOL;
            
            unset($options['glyph']);
        }

        $attributes = $attributesDefault + $options;

        return "<button {$this->attributes($attributes)}>{$label}</button>";
    }
}
