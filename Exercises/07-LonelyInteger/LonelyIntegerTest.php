<?php

require('LonelyInteger.php');

use PHPUnit\Framework\TestCase;

class LonelyIntegerTest extends TestCase
{
    public function testCanFindLonelyInteger() : void
    {
        $input = [1,2,3,4,3,2,1];
        $expected = 4;
        $result = lonely_integer($input);

        $this->assertEquals($expected, $result);
    }

    public function testCanFindLonelyIntegerSmallArray() : void
    {
        $input = [1,1,2];
        $expected = 2;
        $result = lonely_integer($input);

        $this->assertEquals($expected, $result);
    }

    public function testCanFindLonelyIntegerBiggestOfArray() : void
    {
        $input = [0, 0, 1, 2, 1];
        $expected = 2;
        $result = lonely_integer($input);

        $this->assertEquals($expected, $result);
    }

    public function testCanFindLonelyIntegerSmallestOfArray() : void
    {
        $input = [0, 1, 2, 1, 2, 3, 3];
        $expected = 0;
        $result = lonely_integer($input);

        $this->assertEquals($expected, $result);
    }

    public function testCanFindLonelyIntegerMiddleOfArray() : void
    {
        $input = [0, 0, 1, 2, 1, 3, 3];
        $expected = 2;
        $result = lonely_integer($input);

        $this->assertEquals($expected, $result);
    }
}
