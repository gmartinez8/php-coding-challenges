<?php

function  minimum_bribes($q) {
    $swapCount = 0;
    [1,2,5,3,7,8,6,4];

    for ($i = count($q) - 1; $i  > 0; $i--) {

        if ($q[$i] != ($i + 1)) {

            if ((($i - 1) >= 0) && $q[$i - 1]  == ($i + 1)) {
                $swapCount++;
                $temp = $q[$i];
                $q[$i] = $q[$i-1];
                $q[$i-1] = $temp;

            } else if ((($i - 2) >= 0) && $q[$i - 2]  == ($i + 1)) {
                $swapCount += 2;
                $tempI = $q[$i];
                $tempOne = $q[$i-1];
                $tempTwo = $q[$i-2];

                $q[$i-2] = $tempOne;
                $q[$i-1] = $tempI;
                $q[$i] = $tempTwo;
            } else {
                // In this case it's like having this condition 
                // if ($q[$i-1] != ($i + 1) && $q[$i-2] != ($i + 1)) 
                echo "Too chaotic\n";

                return;
            }

        }
    }

    echo "{$swapCount}\n";
}
