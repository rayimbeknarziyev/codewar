<?php

function createPhoneNumber($numbersArray) {
    $a = implode("", array_slice($numbersArray, 0,3));
    $b = implode("", array_slice($numbersArray, 3,3));
    $c = implode("", array_slice($numbersArray, 6,10));
      
      return "($a) $b-$c";
  }