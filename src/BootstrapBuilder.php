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

    public function alert($message, $title = '', $class = 'danger', $glyph = '', $close = TRUE)
    {
        $title = empty($title) ? '' : self::SPACE . "{$title}." . self::SPACE;
        $class = empty($class) ? 'danger' : $class;

        return view('bootstrap::alert', compact('message', 'title', 'class', 'glyph', 'close'));
    }

    public function dropdown($title, array $links = [], $class = 'default', $id = 'dropdownMenu1', $openBottom = TRUE)
    {
        $class = empty($class) ? 'danger' : $class;
        $id = empty($id) ? 'dropdownMenu1' : $id;
        $openBottom = $openBottom ? 'dropdown' : 'dropup';

        return view('bootstrap::dropdown', compact('title', 'links', 'class', 'id', 'openBottom'));
    }

    public function buttonToolbar(array $buttons = [], $classActive = 'primary', $classNotActive = 'default', $ariaLabel = '')
    {
      return view('bootstrap::buttonToolbar', compact('buttons', 'classActive', 'classNotActive', 'ariaLabel'));
    }
}
