<?php

require('MinMaxSum.php');

use PHPUnit\Framework\TestCase;

class MinMaxSumTest extends TestCase
{
    public function testCanFindMinMaxSum() : void
    {
        $array = [1, 3, 5, 7, 9];
        $expected = "16 24";

        $this->expectOutputString($expected);

        min_max_sum($array);
    }

    public function testCanFindComplexMinMaxSumComplex() : void
    {
        $array = [1, 2, 3, 4, 5];
        $expected = "10 14";

        $this->expectOutputString($expected);

        min_max_sum($array);
    }

    public function testCanFindComplexMinMaxSumBigNumbers() : void
    {
        $array = [7, 69, 2, 221, 8974];
        $expected = "299 9271";

        $this->expectOutputString($expected);

        min_max_sum($array);
    }
}
