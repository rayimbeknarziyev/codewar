<?php

function disemvowel(string $s): string  {
    $unlilar = ['a','i','o', 'u','e','A','I','E','O','U'];
    $count = 0;
    
    for($i = 0; $i < strlen($s);$i++){
      $x = str_replace($unlilar, '', $s);
    }
    return $x;
  }
  