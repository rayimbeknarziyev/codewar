<?php

function digital_root($number): int
{
  while($number > 9){
    $num = str_split($number);
    $number = array_sum($num);
  }
  return $number;
}