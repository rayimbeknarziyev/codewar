<?php
  
function spinWords(string $str): string {
   $strArrs = explode(" ", $str);

  foreach ($strArrs as &$strArr) {
    $strLength = strlen($strArr);

    if ($strLength >= 5) {
      $strArr = strrev($strArr);
    }
  }
  $return = implode(" ", $strArrs);
  return $return;
}