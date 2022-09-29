<?php

require('Intersection.php');

use PHPUnit\Framework\TestCase;

class IntersectionTest extends TestCase
{
    public function testIntersection() : void
    {
        $arr1 = [1,3,5,7,10];
        $arr2 = [2,3,6,8,10,20];
        $expected = [3, 10];

        $result = intersection($arr1, $arr2);

        $this->assertEquals($expected, $result);
    }

    public function testIntersectionBigArray() : void
    {
        $arr1 = [1,3,5,7,10,12,15,16,18,21];
        $arr2 = [2,3,4,6,10,11,15,16,18,20];
        $expected = [3,10,15,16,18];

        $result = intersection($arr1, $arr2);

        $this->assertEquals($expected, $result);
    }
}
