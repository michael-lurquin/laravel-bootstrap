<?php

namespace Lurquinm\LaravelBootstrap\Traits;

trait Utils
{
    /**
     * Convert all applicable characters to HTML entities.
     *
     * @param string $value
     *
     * @return string
     */
    public function escapeAll($value)
    {
        return htmlentities($value, ENT_QUOTES, 'UTF-8');
    }

    /**
     * Build an HTML attribute string from an array.
     *
     * @param array $attributes
     *
     * @return string
     */
    public function attributes(array $attributes)
    {
        $html = [];

        foreach ($attributes as $key => $value)
        {
            $element = $this->attributeElement($key, $value);

            if ( !is_null($element) )
            {
                $html[] = $element;
            }
        }

        return count($html) > 0 ? implode(' ', $html) : '';
    }

    /**
     * Build a single attribute element.
     *
     * @param string $key
     * @param string $value
     *
     * @return string
     */
    private function attributeElement($key, $value)
    {
        // For numeric keys we will assume that the key and the value are the same
        // as this will convert HTML attributes such as "required" to a correct
        // form like required="required" instead of using incorrect numerics.
        if ( is_numeric($key) )
        {
            $key = $value;
        }

        if ( !is_null($value) )
        {
            return "{$key}='{$this->escapeAll($value)}'";
        }
    }
}
