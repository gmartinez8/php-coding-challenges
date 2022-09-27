<?php

function diagonal_difference($arr) {
    $i = 0;
    $j = count($arr) - 1;
    $leftDiagonal = 0;
    $rightDiagonal = 0;

    while($i < count($arr)) {
        $leftDiagonal = $leftDiagonal + $arr[$i][$i];
        $rightDiagonal = $rightDiagonal + $arr[$i][$j];

        $i++;
        $j--;
    }
    $result = $leftDiagonal - $rightDiagonal;

    return abs($result);
}
