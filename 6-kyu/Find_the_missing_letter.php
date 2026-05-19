<?php

function find_missing_letter(array $array): string {
    for($i=0;$i < count($array) - 1; $i++ ){
      $current = ord($array[$i]);
      $next = ord($array[$i+1]);
      
      if($next - $current !== 1){
        return chr($current + 1);
      }
    }
  }