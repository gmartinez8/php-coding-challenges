<?php
require('PlusMinus.php');

use PHPUnit\Framework\TestCase;

class PlusMinusTest extends TestCase
{
    public function testPlusMinusDefaultArray()
    {
        $array  = [1, 1, 0, -1, -1];
        $expected = "0.40000\n0.40000\n0.20000\n";
        $this->expectOutputString($expected);

        plusMinus($array);
    }

    public function testPlusMinusComplexArray()
    {
        $array  = [-4, 3, -9, 0, 4, 1];
        $expected = "0.50000\n0.33333\n0.16667\n";
        $this->expectOutputString($expected);

        plusMinus($array);
    }

    public function testPlusMinusMultipleZeroArray()
    {
        $array  = [1, 2, 3, -1, -2, -3, 0, 0];
        $expected = "0.37500\n0.37500\n0.25000\n";
        $this->expectOutputString($expected);

        plusMinus($array);
    }
}

?>