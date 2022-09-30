<?php

require('FlippingMatrix.php');

use PHPUnit\Framework\TestCase;

class FlippingMatrixTest extends TestCase
{

    public function testCanFlipMatrix() : void
    {
        $input = [[1,2],[3,4]];

        $expected = 4;

        $result = flipping_matrix($input);

        $this->assertEquals($expected, $result);
    }

    public function testFlippingMatrix() : void
    {
        $input = [
            [112, 42, 83,119],
            [ 56,125, 56, 49],
            [ 15, 78,101, 43],
            [ 62, 98,114,108]
        ];

        $expected = 414;

        $result = flipping_matrix($input);

        $this->assertEquals($expected, $result);
    }

    public function testFlippingMatrixBorder() : void
    {
        $input = [
            [107,54,128, 15],
            [ 12,75,110,138],
            [100,96, 34, 85],
            [ 75,15, 28,112]
        ];

        $expected = 488;

        $result = flipping_matrix($input);

        $this->assertEquals($expected, $result);
    }
}