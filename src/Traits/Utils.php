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
        $arr = explode(', ', trim($expression));

        $value = $arr[0];
        $class = 'default';

        if ( count($arr) > 1 )
        {
            $class = $arr[1];
        }

        return [$value, $class];
    }
}
