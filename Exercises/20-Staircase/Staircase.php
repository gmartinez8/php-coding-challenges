<?php

function staircase($n) {
    for ($i = 1; $i <= $n; $i++) {
        $temp = str_pad("", $n - $i);
        $temp = str_pad($temp, $n, "#", STR_PAD_RIGHT);
        
        echo $temp."\n";
    }
}
