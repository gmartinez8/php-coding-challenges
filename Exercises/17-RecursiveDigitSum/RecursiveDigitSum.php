<?php

function digit_sum($n) {
    $result = 0;

    foreach (str_split($n) as $number) {
        $result = $result + (int) $number;
    }

    return (string) $result;
}

function sup_digit($n) {
    if (strlen($n) <= 1) {
        return $n;
    }

    return sup_digit( digit_sum($n) );
}

function super_digit($n, $k) {
    $sum = digit_sum($n);
    $result = (int)$sum * $k;

    return sup_digit((string) $result);
}
