<?php
require('SumArray.php');

use PHPUnit\Framework\TestCase;

class SumArrayTest extends TestCase
{
    public function testCanSumArray()
    {
        $array  = [2,4,5,9];
        $num = 9;

        $result = sum_array($array, $num);
        $this->assertTrue($result);
    }

    public function testCanNotSumArray()
    {
        $array  = [2,4,5,9];
        $num = 12;

        $result = sum_array($array, $num);
        $this->assertFalse($result);
    }

    public function testCanSumArrayForNegative()
    {
        $array  = [-1,0,2,4,5,15,22];
        $num = 9;

        $result = sum_array($array, $num);
        $this->assertTrue($result);
    }
}

?>