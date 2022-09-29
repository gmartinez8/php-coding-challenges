<?php

require('CaesarCipher.php');

use PHPUnit\Framework\TestCase;

class CaesarCipherTest extends TestCase
{
    public function testCaesarCipher() : void
    {
        $s = "middle-Outz";
        $k = 2;
        $expected = "okffng-Qwvb";

        $result = caesar_cipher($s, $k);

        $this->assertEquals($expected, $result);
    }

    public function testCaesarCipherLongString() : void
    {
        $s = "Always-Look-on-the-Bright-Side-of-Life";
        $k = 5;
        $expected = "Fqbfdx-Qttp-ts-ymj-Gwnlmy-Xnij-tk-Qnkj";

        $result = caesar_cipher($s, $k);

        $this->assertEquals($expected, $result);
    }

    public function testCaesarCipherNBiggerThanAlphabet() : void
    {
        $s = "1X7T4VrCs23k4vv08D6yQ3S19G4rVP188M9ahuxB6j1tMGZs1m10ey7eUj62WV2exLT4C83zl7Q80M";
        $k = 27;
        $expected = "1Y7U4WsDt23l4ww08E6zR3T19H4sWQ188N9bivyC6k1uNHAt1n10fz7fVk62XW2fyMU4D83am7R80N";

        $result = caesar_cipher($s, $k);

        $this->assertEquals($expected, $result);
    }

    public function testCaesarCipherNBiggerThanAlphabetDouble() : void
    {
        $s = "6DWV95HzxTCHP85dvv3NY2crzt1aO8j6g2zSDvFUiJj6XWDlZvNNr";
        $k = 87;
        $expected = "6MFE95QigCLQY85mee3WH2laic1jX8s6p2iBMeODrSs6GFMuIeWWa";

        $result = caesar_cipher($s, $k);

        $this->assertEquals($expected, $result);
    }
}