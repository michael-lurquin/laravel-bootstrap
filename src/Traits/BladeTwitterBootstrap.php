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
        $label = !empty($label) && !empty($glyph) ? '&nbsp;' . $label : $label;
        $output = !empty($glyph) ? $this->glyph($glyph) . $label : $label;

        return "<button type='button' class='btn btn-{$class} $size'>{$output}</button>";
    }

    /**
     * Generate a "alert message" HTML
     *
     * @param  [string] $class [Button style (default, primary, success, info, warning, danger)]
     * @param  [string] $glyph [Name of the glyphicon (without the prefix 'glyphicon glyphicon-')]
     * @param  [string] $message [Alert message]
     * @param  [string] $title [Alert title]
     * @return [string]
     */
    public function alert($class, $glyph, $message, $title)
    {
        $title = !empty($title) ? '<strong>' . $title . '</strong>' : '';
        $output = !empty($title) && !empty($glyph) ? $this->glyph($glyph) . '&nbsp;' . $title . '.' : '';

        if ( empty($message) )
        {
            return '';
        }
        else
        {
            return "
                <div class='alert alert-{$class} alert-dismissible' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                    {$output}
                    {$message}
                </div>
            ";
        }
    }
}
