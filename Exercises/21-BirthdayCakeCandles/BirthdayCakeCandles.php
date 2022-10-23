<?php

function birthdayCakeCandles($candles) {
    rsort($candles, SORT_NUMERIC);
    $tallest = $candles[0];
    $count = 1;
    for ($i = 1; $i < sizeof($candles);$i++) {
        if ($candles[$i] != $tallest) {
            return $count;
        }

        $count += 1;
    }

    return $count;
}
