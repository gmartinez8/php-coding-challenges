<?php

function palindrom_index(string $s) {
    $result = -1;
    $len = strlen($s);

    if ($len >= 1 &&  $s !== strrev($s)) {

        for ($i = 0; $i < $len; $i++) {

            if ($s[$i] !== $s[$len - 1 - $i]) {

                $s1 = substr($s, 0, $i) . substr($s, $i + 1); 
                $s2 = substr($s, 0, ($len - 1 - $i)) . substr($s,($len - 1 - $i) + 1);
        
                if ($s1 === strrev($s1)) {
                    $result = $i;
                } else if ($s2 === strrev($s2)) {
                    $result = $len - 1 - $i;
                }      

                break;
            }
        }
    }

    return $result;
}
