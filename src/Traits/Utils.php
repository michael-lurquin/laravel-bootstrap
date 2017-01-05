<?php

namespace BladeBootstrap\TwitterBootstrap\Traits;

trait Utils
{
    public function parse($expression)
    {
        $explode = explode(',', $expression);

        array_walk($explode, function(&$item) {
          $item = trim($item, ' ');
        });

        $results = [];

        if ( count($explode) > 1 )
        {
            foreach ($explode as &$item)
            {
                if ( strpos($item, '=>') !== FALSE )
                {
                    $item = str_replace('"', '\'', $item);
                    $item = str_replace('[', '', $item);
                    $item = str_replace(']', '', $item);
                    $item = str_replace(' =>', '=>', $item);
                    $item = str_replace('=> ', '=>', $item);

                    preg_match("/(.*)('=>'?)(.*)/i", $item, $matches);

                    $results[trim($matches[1], '\'')] = trim($matches[3], '\'');
                }
                else
                {
                    $results[] = $item;
                }
            }
        }
        else
        {
          $results = $expression;
        }

        return $results;
    }

    public function appendAttributes($attributes)
    {
        $attr = '';

        if ( !empty($attributes) )
        {
            $attr = ' ';

            foreach ($attributes as $key => $value)
            {
                $attr .= "{$key}='{$value}' ";
            }

            $attr = rtrim($attr, ' ');
        }

        return $attr;
    }

    public function getArguments($arguments, $number = 1)
    {
        $args = [];

        if ( !is_array($arguments) )
        {
            return [$arguments, $args];
        }
        else
        {
            $args = array_slice($arguments, $number);

            if ( $number === 2 )
            {
                list($one, $two) = $arguments;
                return [$one, $two, $args];
            }
            elseif ( $number === 3 )
            {
                list($one, $two, $three) = $arguments;
                return [$one, $two, $three, $args];
            }
            elseif ( $number === 4 )
            {
                list($one, $two, $three, $four) = $arguments;
                return [$one, $two, $three, $four, $args];
            }
            elseif ( $number === 5 )
            {
                list($one, $two, $three, $four, $five) = $arguments;
                return [$one, $two, $three, $four, $five, $args];
            }

            return [$arguments[0], $args];
        }
    }
}
