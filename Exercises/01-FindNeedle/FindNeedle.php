<?php

function find_needle(string $needle, string $haystack) {
  for($i=0; $i<strlen($haystack);$i++)
  {
    if ($haystack[$i] === $needle[0]) {
      $tmpHaystack = substr($haystack,$i, strlen($needle));

      if ($tmpHaystack === $needle) {
        return $i;
      }
    }
  }

  return -1;
}

?>