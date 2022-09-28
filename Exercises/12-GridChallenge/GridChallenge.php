<?php

function grid_challenge($grid) {
    for ($i=0; $i < count($grid); $i++) {
        $grid[$i] = str_split($grid[$i]);
        sort($grid[$i]);
    }

    $i = 1;
    $j = 0;

    while(true) {
        if($i == count($grid)) {
            $j++;
            $i = 1;
        }

        if($j == count($grid[0])) return 'YES';
        if($grid[$i - 1][$j] > $grid[$i][$j]) return 'NO';
        $i++;
    }
}


function grid_challenge_first_solution(array $grid) {
    for ($i=0; $i < count($grid); $i++) {
        $grid[$i] = str_split($grid[$i]);
        sort($grid[$i]);
    }

    for ($i=0; $i < count($grid[0]); $i++) {
        for ($j=1; $j < count($grid[0]); $j++) {
            
            if($grid[$j - 1][$i] > $grid[$j][$i]) return 'NO';
            
        }
    }

    return "YES";
}
