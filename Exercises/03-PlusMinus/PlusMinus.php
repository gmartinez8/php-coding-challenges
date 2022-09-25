<?php

function plusMinus($arr) {
    // Write your code here
    $positives = 0;
    $negatives = 0;
    $zeroValues = 0;
    $total = count($arr);
    
    for ($i=0; $i<$total; $i++) {
        if ($arr[$i] === 0) {
            $zeroValues += 1;
        } else if ($arr[$i] < 0) {
            $negatives += 1;
        } else {
            $positives += 1;
        }
    }
    
    $positives = number_format((float)($positives/$total), 5, '.','');
    $negatives = number_format((float)($negatives/$total), 5, '.','');
    $zeroValues = number_format((float)($zeroValues/$total), 5, '.','');
    
    echo ($positives)."\n";
    echo ($negatives)."\n";
    echo ($zeroValues)."\n";
}
