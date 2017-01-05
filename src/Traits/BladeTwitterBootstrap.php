<?php

namespace BladeBootstrap\TwitterBootstrap\Traits;

trait BladeTwitterBootstrap
{
    /**
     * Deleting single or double quotation marks at the beginning and end of the character string
     *
     * @param  [string] $string
     * @return [string]
     */
    private function removeQuotes($string)
    {
        if ( !empty($string) )
        {
            if ( substr($string, 0, 1) === '"' )
            {
                return trim($string, '"');
            }

            if ( substr($string, 0, 1) === '\'' )
            {
                return trim($string, '\'');
            }
        }

        return $string;
    }

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
    public function button($value, $class)
    {
        $value = $this->removeQuotes($value);
        $class = $this->removeQuotes($class);

        return "<button type='button' class='btn btn-{$class}'>{$value}</button>";
    }

    /**
     * Generate a "button" HTML tag with a "glyphicon"
     *
     * @param  [string] $glyph [Name of the glyphicon (without the prefix 'glyphicon glyphicon-')]
     * @param  [string] $class [Button style (default, primary, success, info, warning, danger)]
     * @return [string]
     */
    public function buttonGlyph($glyph, $class)
    {
        $class = $this->removeQuotes($class);

        $glyph = $this->glyph($glyph);

        return "<button type='button' class='btn btn-{$class}'>{$glyph}</button>";
    }
}
