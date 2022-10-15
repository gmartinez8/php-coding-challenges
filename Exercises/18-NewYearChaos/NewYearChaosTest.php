<?php

require('NewYearChaos.php');

use PHPUnit\Framework\TestCase;

class NewYearChaosTest extends TestCase
{

    public function testCanSolveNewYearChaos() : void
    {
        $input = [2, 1, 5, 3, 4];

        $expected = "3\n";

        $this->expectOutputString($expected);

        minimum_bribes($input);
    }

    public function testNewYearChaos() : void
    {
        $input = [2, 5, 1, 3, 4];

        $expected = "Too chaotic\n";

        $this->expectOutputString($expected);

        minimum_bribes($input);
    }

    public function testNewYearChaosCase1() : void
    {
        $input = [5,1,2,3,7,8,6,4];

        $expected = "Too chaotic\n";

        $this->expectOutputString($expected);

        minimum_bribes($input);
    }

    public function testNewYearChaosCase2() : void
    {
        $input = [1,2,5,3,7,8,6,4];

        $expected = "7\n";

        $this->expectOutputString($expected);

        minimum_bribes($input);
    }
}
