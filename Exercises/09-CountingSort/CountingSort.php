<?php

function counting_sort($arr) {
    $result = array_fill(0, 100, 0);

    for ($i = 0; $i < count($arr); $i++) {
        $currentIndex = $arr[$i];
        $result[$currentIndex] = $result[$currentIndex] + 1;
    }

    return $result;
}
