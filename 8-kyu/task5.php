<?php
  
function betterThanAverage(array $classPoints, int $yourPoints): bool
{
    $classScore = array_sum($classPoints) / count($classPoints);
   return $yourPoints > $classScore ? true : false;
}