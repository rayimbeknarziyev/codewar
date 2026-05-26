<?php

  
function highAndLow(string $numbers): string {
    $son = explode(" ", $numbers);
    $min = min($son);
    $max = max($son);
    
    return "$max $min";
  }