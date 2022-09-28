<?php

require('MultiDimensionalSumArray.php');

use PHPUnit\Framework\TestCase;

class MultiDimensionalSumArrayTest extends TestCase
{
    public function testCanSumArray() : void
    {
        $input = [1,2,3,4];
        $expected = 10;

        $result = md_array_sum($input);

        $this->assertEquals($expected, $result);
    }

    public function testCanMultiDimensionalSumArray() : void
    {
        $input = [ [2,4], [1], [4,2,1] ];
        $expected = 14;

        $result = md_array_sum($input);

        $this->assertEquals($expected, $result);
    }

    public function testCanMultiDimensionalSumArrayThreeLevels() : void
    {
        $input = [ 2, [3,4], 5, [-3, [6 , [ 4,5 ] ] ] ];
        $expected = 26;

        $result = md_array_sum($input);

        $this->assertEquals($expected, $result);
    }
}
