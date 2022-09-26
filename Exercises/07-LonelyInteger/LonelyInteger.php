<?php

function lonely_integer($a) {
    sort($a);
    $end = count($a);
    for ($i = 0; $i < $end;$i=$i+2) {
        if ($i+1 >= $end || $a[$i] !== $a[$i+1]) {
            return $a[$i];
        }
    }

    return -1;
}
