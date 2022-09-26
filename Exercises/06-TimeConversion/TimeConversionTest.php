<?php

require('TimeConversion.php');

use PHPUnit\Framework\TestCase;

class TimeConversionTest extends TestCase
{
    public function testCanConvertAmTime() : void
    {
        $input = "12:01:00AM";
        $expected = "00:01:00";
        $result = time_conversion($input);

        $this->assertEquals($expected, $result);
    }

    public function testCanConvertPmTime() : void
    {
        $input = "12:01:00PM";
        $expected = "12:01:00";
        $result = time_conversion($input);

        $this->assertEquals($expected, $result);
    }

    public function testCanConvertPmComplexTime() : void
    {
        $input = "07:05:45PM";
        $expected = "19:05:45";
        $result = time_conversion($input);

        $this->assertEquals($expected, $result);
    }
}
