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
    public function glyph($glyph, &$args, $glyphiconType = 'bootstrap')
    {
        $glyphiconBootstrap = 'glyphicon glyphicon-';
        $glyphiconFontAwesome = 'fa fa-';

        if ( !empty($args['glyphiconType']) )
        {
            $glyphiconType = $args['glyphiconType'];
            unset($args['glyphiconType']);
        }

        $glyph = str_replace([$glyphiconBootstrap, $glyphiconFontAwesome], '', $glyph);

        $glyph = $glyphiconType === 'bootstrap' ? $glyphiconBootstrap . $glyph : $glyphiconFontAwesome . $glyph;

        return $glyph ? "<span class='{$glyph}' aria-hidden='true'></span>" : '';
    }

    /**
     * Generate a "button" HTML tag
     *
     * @param  [string] $label [Button label]
     * @return [string]
     */
    public function button($label, $args, $class = 'default')
    {
        $class = !empty($args['class']) ? $args['class'] : $class;
        $label = !empty($label) && !empty($args['glyph']) ? '&nbsp;' . $label : $label;
        $output = !empty($args['glyph']) ? $this->glyph($args['glyph'], $args) . $label : $label;

        if ( !empty($args['class']) ) unset($args['class']);
        if ( !empty($args['glyph']) ) unset($args['glyph']);

        $attr = $this->appendAttributes($args);

        return "<button type='button' class='btn btn-{$class}'{$attr}>{$output}</button>";
    }
}
