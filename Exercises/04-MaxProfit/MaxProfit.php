<?php

// function max_profit($array) {
//     $maxProfit = $array[1] - $array[0];

//     for($i = 0; $i < count($array) - 1; $i++) {
//         for ($j= $i +1; $j < count($array); $j++) {
//             $currentProfit = $array[$j] - $array[$i];
//             if ($currentProfit > $maxProfit) {
//                 $maxProfit = $currentProfit;
//             }
//         }
//     }

//     return $maxProfit;
// }
// Does the job but it's O(n^2)


function max_profit($array) {
    $maxProfit = $array[1] - $array[0];
    $minBuy = $array[0];

    for($i = 0; $i < count($array); $i++) {
        $potentialProfit = $array[$i] - $minBuy;
        $maxProfit = max($maxProfit, $potentialProfit);
        $minBuy = min($minBuy, $array[$i]);
    }

    return $maxProfit;
}