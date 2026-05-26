<?php


  
function findShort(string $str): int{
    $words = explode(' ', $str);
      
      $shortest = strlen($words[0]);
      
      foreach ($words as $word) {
          $currentLength = strlen($word);
          
          if ($currentLength < $shortest) {
              $shortest = $currentLength;
          }
      }
      
      return $shortest;
  
  }