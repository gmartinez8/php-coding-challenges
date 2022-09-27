<?php

require('DiagonalDifference.php');

use PHPUnit\Framework\TestCase;

class DiagonalDifferenceTest extends TestCase
{
    public function testDiagonalDifference() : void
    {
        $input = [[1,2,3], [4,5,6], [9,8,9]];
        $expected = 2;
        $result = diagonal_difference($input);

        $this->assertEquals($expected, $result);
    }

    public function testDiagonalDifferenceOfNegative() : void
    {
        $input = [[11,2,4], [4,5,6], [10,8,-12]];
        $expected = 15;
        $result = diagonal_difference($input);

        $this->assertEquals($expected, $result);
    }
}
