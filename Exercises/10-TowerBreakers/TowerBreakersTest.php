<?php

require('TowerBreakers.php');

use PHPUnit\Framework\TestCase;

class TowerBreakersTest extends TestCase
{

    public function testTowerBreakersOneTower() : void
    {
        $n = 1;
        $m = 7;
        $expected = 1;

        $result = tower_breakers($n, $m);

        $this->assertEquals($expected, $result);
    }

    public function testTowerBreakersTwoTowers() : void
    {
        $n = 2;
        $m = 2;
        $expected = 2;

        $result = tower_breakers($n, $m);

        $this->assertEquals($expected, $result);
    }

    public function testTowerBreakersThreeTowers() : void
    {
        $n = 3;
        $m = 7;
        $expected = 1;

        $result = tower_breakers($n, $m);

        $this->assertEquals($expected, $result);
    }

    public function testTowerBreakersWinnerPlayerOne() : void
    {
        $n = 1;
        $m = 4;
        $expected = 1;

        $result = tower_breakers($n, $m);

        $this->assertEquals($expected, $result);
    }
}