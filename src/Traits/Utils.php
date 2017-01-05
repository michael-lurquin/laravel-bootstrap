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

    private function parseButtonExpressionBlade($type, $expression)
    {
        $arr = explode(', ', $expression);

        $options = $this->app->config["laravel-bootstrap.default_values.$type"];

        $result = [];
        $index = 0;

        foreach ($options as $key => $value)
        {
            $result[$key] = empty($arr[$index]) ? $value : $this->removeQuotes($arr[$index]);
            $index++;
        }

        return $result;
    }
}
