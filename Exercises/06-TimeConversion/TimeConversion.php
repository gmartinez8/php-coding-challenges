<?php

function time_conversion($time) {
    $AM_CONVERSOR = array(
        "01"=> "01",
        "02"=> "02",
        "03"=> "03",
        "04"=> "04",
        "05"=> "05",
        "06"=> "06",
        "07"=> "07",
        "08"=> "08",
        "09"=> "09",
        "10"=> "10",
        "11"=> "11",
        "12"=> "00",
    );

    $PM_CONVERSOR = array(
        "01"=> "13",
        "02"=> "14",
        "03"=> "15",
        "04"=> "16",
        "05"=> "17",
        "06"=> "18",
        "07"=> "19",
        "08"=> "20",
        "09"=> "21",
        "10"=> "22",
        "11"=> "23",
        "12"=> "12",
    );

    $convertedTime = "";
    $time = str_replace(":", "", $time);
    $time = str_split($time, 2);

    $hour = $time[0]; 
    $minutes = $time[1];
    $seconds = $time[2];
    $meridian = $time[3];
    
    if ($meridian === "AM") {
        $hour = $AM_CONVERSOR[$hour];
    } else if ($meridian === "PM") {
        $hour = $PM_CONVERSOR[$hour];
    }

    $convertedTime = "{$hour}:{$minutes}:{$seconds}";

    return $convertedTime;
}
