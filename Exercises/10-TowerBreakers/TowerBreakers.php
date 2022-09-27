<?php
/**
 * 
 * If it is possible for Player2 to mirror the moves of Player1 then Player2 will always win.
 * 
 * It doesn't matter if Player1 divides first or reduces to 1 (Player2 will always win). 
 * 
 * The only way that Player2 can't win is if there is an odd number of towers.
 * 
 * With an odd number of towers Player2 cannot mirror Player1 and thus looses.
 * 
 * The m === 1 is the edge case. 
 * 
 * If the towers are all at 1 height then Player1 doesn't have a valid move and thus looses.
 */

function  tower_breakers(int $n, int $m) {
    if($n % 2 === 0 || $m === 1) {
        return 2;
    }

    return 1;
}
