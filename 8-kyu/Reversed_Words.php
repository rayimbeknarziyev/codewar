<?php

// function reverseWords($str) {
//     $strrev = strrev($str);
//     $strArr = explode(" ", $strrev);
//     $compArr = array_map('strrev', $strArr);
//     $result = implode(' ', $compArr);
//     return $result;
//   }


// $number = 10;
// function solution(int $number): int
// {
//   $multipleNumbers = 0;
//   for ($i = 0; $i < $number; $i++) {
//     if ($i % 3 === 0 || $i % 5 === 0) {
//       $multipleNumbers += $i;
//       // var_dump($i);
//     }
//   }
//   // var_dump($multipleNumbers);
//   return $multipleNumbers;
// }

// echo solution($number);


$str = "Hey fellow warriors";
function spinWords(string $str)
{
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


echo spinWords($str);
