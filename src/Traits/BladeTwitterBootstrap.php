<?php

namespace BladeBootstrap\TwitterBootstrap\Traits;

trait BladeTwitterBootstrap
{
    /**
     * Generate a "glyphicon" HTML tag
     *
     * @param  [string] $glyph [Name of the glyphicon (without the prefix 'glyphicon glyphicon-')]
     * @return [string]
     */
    public function glyph($glyph)
    {
        return $glyph ? "<span class='glyphicon glyphicon-{$glyph}' aria-hidden='true'></span>" : '';
    }

    /**
     * Generate a "button" HTML tag
     *
     * @param  [string] $label [Button label]
     * @param  [string] $class [Button style (default, primary, success, info, warning, danger)]
     * @param  [string] $glyph [Name of the glyphicon (without the prefix 'glyphicon glyphicon-')]
     * @param  [string] $size [Size of button (btn-lg, btn-sm, btn-xs)]
     * @return [string]
     */
    public function button($label, $class, $glyph, $size)
    {
        $label = empty($label) ? '' : $label;
        $label = !empty($label) && !empty($glyph) ? ' ' . $label : $label;
        $output = !empty($glyph) ? $this->glyph($glyph) . $label : $label;

        return "<button type='button' class='btn btn-{$class} $size'>{$output}</button>";
    }
}
