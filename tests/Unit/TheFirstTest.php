<?php

use PHPUnit\Framework\TestCase;

class TheFirstTest extends TestCase
{
    public function testTrueEqualTrue(){
        $this->assertEquals(expected: true, actual: true);
    }

    public function testTrueIsNotEqualFalse(){
        $this->assertNotEquals(expected: true, actual:false);
    }
}