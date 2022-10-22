<?php
require('Staircase.php');

use PHPUnit\Framework\TestCase;

class StaircaseTest extends TestCase
{
    public function testStaircaseOfFour()
    {
        $n = 4;
        $expected = "   #\n  ##\n ###\n####\n";

        $this->expectOutputString($expected);

        staircase($n);
    }

    public function testStaircaseOfSix()
    {
        $n = 6;
        $expected = "     #\n    ##\n   ###\n  ####\n #####\n######\n";

        $this->expectOutputString($expected);

        staircase($n);
    }

    public function testStaircaseOfEight()
    {
        $n = 8;
        $expected = "       #\n      ##\n     ###\n    ####\n   #####\n  ######\n #######\n########\n";

        $this->expectOutputString($expected);

        staircase($n);
    }

    public function testStaircaseOfTen()
    {
        $n = 10;
        $expected = "         #\n        ##\n       ###\n      ####\n     #####\n    ######\n   #######\n  ########\n";
        $expected = $expected." #########\n##########\n";
        $this->expectOutputString($expected);

        staircase($n);
    }

    public function testStaircaseOfTwelve()
    {
        $n = 12;
        $expected = "           #\n          ##\n         ###\n        ####\n       #####\n      ######\n     #######\n    ########\n";
        $expected = $expected."   #########\n  ##########\n ###########\n############\n";
        $this->expectOutputString($expected);

        staircase($n);
    }
}

?>