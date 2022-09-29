<?php

function intersection(array $arr1, array $arr2) {
    $index1 = 0;
    $index2 = 0;
    $repeated = [];

    while ($index1 < count($arr1) && $index2 < count($arr2)) {
        if ($arr1[$index1] === $arr2[$index2]) {
            array_push($repeated, $arr1[$index1]);
            $index1++;
            $index2++;
        } else if ($arr1[$index1] < $arr2[$index2]) {
            $index1++;
        } else {
            $index2++;
        }
    }

    return $repeated;
}
