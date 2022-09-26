<?php

function min_max_sum($array)
{
    $SUM_LIMIT = 4;

    $min = 0;
    $max = 0;
    $minIndex = 0;
    $maxIndex = count($array) -1;

    sort($array, SORT_NUMERIC);

    while ($minIndex < $SUM_LIMIT) {
        $min = $min + $array[$minIndex];
        $max = $max + $array[$maxIndex];

        $minIndex++;
        $maxIndex--;
    }

    echo "{$min} {$max}";
}
