<?php

namespace BladeBootstrap\TwitterBootstrap\Traits;

trait Utils
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

    private function parseExpressionBlade($expression)
    {
        $arr = explode(', ', $expression);

        $label =  empty($arr[0]) ? NULL       : $this->removeQuotes($arr[0]);
        $class =  empty($arr[1]) ? 'default'  : $this->removeQuotes($arr[1]);
        $glyph =  empty($arr[2]) ? NULL       : $this->removeQuotes($arr[2]);

        return compact('label', 'class', 'glyph');
    }
}
