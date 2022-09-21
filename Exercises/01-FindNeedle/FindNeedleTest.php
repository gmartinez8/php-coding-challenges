<?php
include 'FindNeedle.php';

use PHPUnit\Framework\TestCase;

class FindNeedleTest extends TestCase
{
    public function testFindNeedle() : void
    {
        $needle = "redux";
        $haystack = "react-redux";
        $expected = 6;

        $result = find_needle($needle, $haystack);
    
        $this->assertEquals($expected, $result);
    }

    public function testCanNotFindNeedle() : void
    {
        $needle = "puntual";
        $haystack = "pinky";
        $expected = -1;

        $result = find_needle($needle, $haystack);
    
        $this->assertEquals($expected, $result);
    }

    public function testCanFindNeedleForHello() : void
    {
        $needle = "ll";
        $haystack = "hello";
        $expected = 2;

        $result = find_needle($needle, $haystack);
    
        $this->assertEquals($expected, $result);
    }

    public function testCanFindFirstNeedle() : void
    {
        $needle = "abc";
        $haystack = "abcdef abcdef";
        $expected = 0;

        $result = find_needle($needle, $haystack);
    
        $this->assertEquals($expected, $result);
    }
}
?>