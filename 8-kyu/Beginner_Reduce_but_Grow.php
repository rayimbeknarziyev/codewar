<?php
  
function grow(array $a): int {
  
  $result = 1;
  foreach($a as $b){
    $result *= $b;
  }
  return $result;
}