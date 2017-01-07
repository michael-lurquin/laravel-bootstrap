<?php

use Lurquinm\LaravelBootstrap\BootstrapBuilder;

class BootstrapBuilderTest extends TestCase
{
    private $glyph = 'search';
    private $label = 'I\'m a button';
    private $class = 'primary';
    private $id = 'button';

    const SPACE = '&nbsp;';

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

    public function testButtonWithClassAttributesGlyph()
    {
        $button = $this->bootstrapBuilder->button('', $this->class, ['id' => $this->id, 'glyph' => $this->glyph]);

        $this->assertEquals("<button type='button' class='btn btn-{$this->class}' id='{$this->id}'>" . PHP_EOL . "<span class='glyphicon glyphicon-{$this->glyph}' aria-hidden='true'></span>" . PHP_EOL . "</button>", $button);
    }

    public function testButtonWithLabelClassAttributesGlyph()
    {
        $button = $this->bootstrapBuilder->button($this->label, $this->class, ['id' => $this->id, 'glyph' => $this->glyph]);

        $this->assertEquals("<button type='button' class='btn btn-{$this->class}' id='{$this->id}'>" . PHP_EOL . "<span class='glyphicon glyphicon-{$this->glyph}' aria-hidden='true'></span>" . self::SPACE . "{$this->label}" . PHP_EOL . "</button>", $button);
    }
}
