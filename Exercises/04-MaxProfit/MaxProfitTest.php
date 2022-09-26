<?php

require('MaxProfit.php');

use PHPUnit\Framework\TestCase;

class MaxProfitTest extends TestCase
{
    public function testCanFindMaxProfit() : void
    {
        $array = [4, 3, 2, 5, 11];
        $expected = 9;
        $result = max_profit($array);

        $this->assertEquals($expected, $result);
    }

    public function testCanFindMaxProfitOfComplex() : void
    {
        $array = [4, 3, 11, 5, 2];
        $expected = 8;
        $result = max_profit($array);

        $this->assertEquals($expected, $result);
    }
}