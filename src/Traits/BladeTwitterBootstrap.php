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
        $glyph = $this->removeQuotes($glyph);

        return "<span class='glyphicon glyphicon-{$glyph}' aria-hidden='true'></span>";
    }

    /**
     * Generate a "button" HTML tag
     *
     * @param  [string] $value [Button label]
     * @param  [string] $class [Button style (default, primary, success, info, warning, danger)]
     * @return [string]
     */
    public function button($label, $class, $glyph)
    {
        $output = !is_null($glyph) ? $this->glyph($glyph) . ' ' . $label : $label;

        return "<button type='button' class='btn btn-{$class}'>{$output}</button>";
    }
}
