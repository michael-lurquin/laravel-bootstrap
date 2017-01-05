<?php

namespace BladeBootstrap\TwitterBootstrap\Traits;

trait BladeTwitterBootstrap
{
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

    public function glyph($glyph)
    {
        $glyph = $this->removeQuotes($glyph);

        return "<span class='glyphicon glyphicon-{$glyph}' aria-hidden='true'></span>";
    }

    public function button($value, $class)
    {
        $value = $this->removeQuotes($value);
        $class = $this->removeQuotes($class);

        return "<button type='button' class='btn btn-{$class}'>{$value}</button>";
    }

    public function buttonGlyph($glyph, $class)
    {
        $class = $this->removeQuotes($class);

        $glyph = $this->glyph($glyph);

        return "<button type='button' class='btn btn-{$class}'>{$glyph}</button>";
    }
}
