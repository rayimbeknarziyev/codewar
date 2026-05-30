<?php

function arrayDiff($a, $b) {
  $third = [];
  
  for($i = 0; $i < count($a); $i++){
    if(!in_array($a[$i], $b)){
      $third[] = $a[$i]; 
    }
  }
  return $third;
}

?>