<?php

function quadratic($a, $b, $c) {
    
    $d = sqrt($b * $b - 4 * $a * $c);
    
    $x1 = (-$b - $d) / (2 * $a);
    
    $x2 = $c / ($a * $x1);
    
    return $x2;
  }