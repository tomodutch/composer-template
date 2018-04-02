<?php


namespace Tests;


use PHPUnit\Framework\TestCase;
use TFarla\ComposerTemplate\Example;

class ExampleTest extends TestCase
{
    /** @test */
    function itShouldAssertTrue()
    {
        $this->assertTrue(true);
    }

    /** @test */
    function itShouldHaveAnAutoloader()
    {
        $example = new Example();

        $this->assertInstanceOf(Example::class, $example);
    }
}
