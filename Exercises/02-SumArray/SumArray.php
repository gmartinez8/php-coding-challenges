<?php

function sum_array($array, $number) {
  //Escribir la funcion
  $start = 0;
  $end = count($array) - 1;
  
  while($start < count($array) - 1) {
    $total = $array[$start] + $array[$end];
    if ($total === $number) {
      return true;
    } else if ($total < $number) {
      $start++;
    } else {
      $end--;
    }
  }
  return false;
}

?>
