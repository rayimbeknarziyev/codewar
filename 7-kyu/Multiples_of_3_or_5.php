<?php
  
function solution(int $number): int {
    $multipleNumbers = 0;
  for ($i = 0; $i < $number; $i++) {
    if ($i % 3 === 0 || $i % 5 === 0) {
      $multipleNumbers += $i;
    }
  }
  return $multipleNumbers;
}