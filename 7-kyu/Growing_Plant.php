<?php

function growingPlant(int $upSpeed, int $downSpeed, int $desiredHeight) : int {
  $height = 0;
  $days = 0;
  while($height < $desiredHeight){
    $days++;
    
    $height += $upSpeed;
    
    if($height >= $desiredHeight){
      return $days;
    }
    $height -= $downSpeed;
  }
}
