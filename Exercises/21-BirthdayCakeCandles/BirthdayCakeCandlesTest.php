<?php
require('BirthdayCakeCandles.php');

use PHPUnit\Framework\TestCase;

class BirthdayCakeCandlesTest extends TestCase
{
    public function testStaircase()
    {
        $candles = [4,4,1,3];
        $expected = 2;

        $result = birthdayCakeCandles($candles);

        $this->assertEquals($expected, $result);
    }

    public function testStaircaseCase1()
    {
        $candles = [3,2,1,3];
        $expected = 2;

        $result = birthdayCakeCandles($candles);

        $this->assertEquals($expected, $result);
    }
}

?>