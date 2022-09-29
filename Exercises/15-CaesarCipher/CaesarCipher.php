<?php

function caesar_cipher(string $s, int $k) {
    $k = $k > 26 ? $k % 26 : $k;
    $originalAlph = "abcdefghijklmnopqrstuvwxyz"; 
    $originalAlph = str_split($originalAlph);
    $cipherAlph = $originalAlph;

    for ($i=0; $i < $k;$i++) {
        array_push($cipherAlph, $originalAlph[$i]);
        array_shift($cipherAlph);
    }

    $cipherAlph = array_combine($originalAlph, $cipherAlph);
    $s = str_split($s);
    $cipherString = "";

    for ($i=0; $i<count($s);$i++) {
        $currentChar = $s[$i];

        if (in_array($currentChar, $originalAlph)) {
            $cipherString = "{$cipherString}{$cipherAlph[$currentChar]}";
        } else if(in_array(strtolower($currentChar), $originalAlph)) {
            $lowerChar = strtolower($currentChar);
            $upperChar = strtoupper($cipherAlph[$lowerChar]);
            $cipherString = "{$cipherString}{$upperChar}";
        } else {
            $cipherString = "{$cipherString}{$currentChar}";
        }
    }

    return $cipherString;
}
