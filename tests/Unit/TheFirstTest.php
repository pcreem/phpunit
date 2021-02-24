<?php

use PHPUnit\Framework\TestCase;

class TheFirstTest extends TestCase
{
    public function testTrueEqualTrue(){
        $this->assertEquals(expected: true, actual: true);
    }
}