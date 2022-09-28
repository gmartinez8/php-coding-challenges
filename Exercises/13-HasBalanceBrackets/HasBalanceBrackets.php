<?php

function has_balance_brackets(string $s) {
    $validBrackets = [
        "(" => ")",
        "[" => "]",
        "{" => "}",
    ];

    $s = str_split(str_replace(" ", "", $s));

    $temp = [];

    for ($i = 0; $i < count($s); $i++) {
        if (array_key_exists($s[$i], $validBrackets)) {
            array_push($temp, $s[$i]);
        } else if ($validBrackets[array_pop($temp)] !== $s[$i]) {
            return false;
        }
    }

    return count($temp) === 0 ? true : false;
}
