<?php

use Lurquinm\LaravelBootstrap\BootstrapBuilder;

class BootstrapBuilderTest extends PHPUnit_Framework_TestCase
{
    private $glyph = 'search';
    private $label = 'I\'m a button';
    private $class = 'primary';
    private $id = 'button';

    public function setUp()
    {
        $this->bootstrapBuilder = new BootstrapBuilder();
    }

    public function testGlyph()
    {
        $glyph = $this->bootstrapBuilder->glyph($this->glyph);

        $this->assertEquals("<span class='glyphicon glyphicon-{$this->glyph}' aria-hidden='true'></span>", $glyph);
    }

    public function testButtonOnlyLabel()
    {
        $button = $this->bootstrapBuilder->button($this->label);

        $this->assertEquals("<button type='button' class='btn btn-default'>{$this->label}</button>", $button);
    }

    public function testButtonWithLabelClass()
    {
        $button = $this->bootstrapBuilder->button($this->label, $this->class);

        $this->assertEquals("<button type='button' class='btn btn-{$this->class}'>{$this->label}</button>", $button);
    }

    public function testButtonWithLabelClassAttributes()
    {
        $button = $this->bootstrapBuilder->button($this->label, $this->class, ['id' => $this->id]);

        $this->assertEquals("<button type='button' class='btn btn-{$this->class}' id='{$this->id}'>{$this->label}</button>", $button);
    }
}
