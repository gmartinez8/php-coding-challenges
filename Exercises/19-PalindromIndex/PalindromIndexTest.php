<?php

require('PalindromIndex.php');

use PHPUnit\Framework\TestCase;

class PalindromIndexTest extends TestCase
{
    public function testPalindromIndex() : void
    {
        $s = "aaab";
        $expected = 3;

        $result = palindrom_index($s);

        $this->assertEquals($expected, $result);
    }

    public function testPalindromIndexCase1() : void
    {
        $s = "quyjjdcgsvvsgcdjjyq";
        $expected = 1;

        $result = palindrom_index($s);

        $this->assertEquals($expected, $result);
    }

    public function testPalindromIndexCase2() : void
    {
        $s = "hgygsvlfwcwnswtuhmyaljkqlqjjqlqkjlaymhutwsnwcflvsgygh";
        $expected = 8;

        $result = palindrom_index($s);

        $this->assertEquals($expected, $result);
    }

    public function testPalindromIndexCase3() : void
    {
        $s = "prcoitfiptvcxrvoalqmfpnqyhrubxspplrftomfehbbhefmotfrlppsxburhyqnpfmqlaorxcvtpiftiocrp";
        $expected = 14;

        $result = palindrom_index($s);

        $this->assertEquals($expected, $result);
    }

    public function testPalindromIndexCase4() : void
    {
        $s = "kjowoemiduaaxasnqghxbxkiccikxbxhgqnsaxaaudimeowojk";
        $expected = -1;

        $result = palindrom_index($s);

        $this->assertEquals($expected, $result);
    }

    public function testPalindromIndexCase5() : void
    {
        $s = "lhrxvssvxrhl";
        $expected = -1;

        $result = palindrom_index($s);

        $this->assertEquals($expected, $result);
    }
}
