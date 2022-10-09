<?php

require('RecursiveDigitSum.php');

use PHPUnit\Framework\TestCase;

class RecursiveDigitSumTest extends TestCase
{
    public function testRecursiveDigitSum() : void
    {
        $n = 9875;
        $k = 4;
        $expected = 8;

        $result = super_digit($n, $k);

        $this->assertEquals($expected, $result);
    }

    public function testRecursiveDigitSumEdgeCase() : void
    {
        $n = 148;

        $k = 3;

        $expected = 3;

        $result = super_digit($n, $k);

        $this->assertEquals($expected, $result);
    }

    public function testRecursiveDigitSumCase1() : void
    {
        $n = 123;
        $k = 3;

        $expected = 9;

        $result = super_digit($n, $k);

        $this->assertEquals($expected, $result);
    }
}
