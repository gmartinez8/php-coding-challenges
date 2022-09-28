<?php

function md_array_sum(array $arr) {
    $total = 0;

    $size = count($arr);

    for ($i = 0; $i < $size; $i++) {
        if (is_array($arr[$i])) {
            $total = $total + md_array_sum($arr[$i]);
        } else {
            $total = $total + $arr[$i];
        }
    }

    return $total;
}
