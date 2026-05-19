<?php
  
function spinWords(string $str): string {
  $words = explode(" ", $str);
  
  for($i = 0; $i < count($words); $i++){
    if(strlen($words[$i])>= 5){
      $words[$i] = strrev($words[$i]);
    }
  }
  return implode(" ", $words);
}