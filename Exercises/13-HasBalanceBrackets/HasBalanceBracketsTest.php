<?php

require('HasBalanceBrackets.php');

use PHPUnit\Framework\TestCase;

class HasBalanceBracketsTest extends TestCase
{
    public function testHasBalanceBrackets() : void
    {
        $s = "{ [ ] ( ) }";

        $result = has_balance_brackets($s);

        $this->assertTrue($result);
    }

    public function testHasBalanceBracketsFalse() : void
    {
        $s = "{ [ ( ] ) }";

        $result = has_balance_brackets($s);

        $this->assertFalse($result);
    }

    public function testHasBalanceBracketsComplex() : void
    {
        $s = "{ [ ( [ { ( ) [ ]{ } } ] ) ] }";

        $result = has_balance_brackets($s);

        $this->assertTrue($result);
    }

    public function testHasBalanceBracketsNonValid() : void
    {
        $s = "{ [ ( [ { ( ) [ ] { } } ] )  - / ] }";

        $result = has_balance_brackets($s);

        $this->assertFalse($result);
    }
}
