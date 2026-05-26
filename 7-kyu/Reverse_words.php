<?php

function reverseWords($str) {
    $words = explode(' ', $str);
      
      $reversedArray = [];
      
      foreach ($words as $word) {
          $reversedArray[] = strrev($word);
      }
      
      return implode(' ', $reversedArray);
  }