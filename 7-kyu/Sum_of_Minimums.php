<?php
  
function sum_of_minimums(array $numbers): int{
  $sum = 0;

    for ($i = 0; $i < count($numbers); $i++) {
        $sum += min($numbers[$i]);
    }

    return $sum;
}