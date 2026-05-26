<?php


function band_name_generator(string $s): string {
  
    $len = strlen($s);
    
    if ($s[0] === $s[$len - 1]) {
          return ucfirst($s . substr($s, 1));
      } else {
          return "The " . ucfirst($s);
      }
  }