<?php

function getCount(string $str): int {
    $unlilar = ['a','e','i','o','u'];
     $x = 0;
     for($i = 0; $i<strlen($str); $i++){
       if(in_array($str[$i], $unlilar)){
         $x++;
       }
     }
     return $x;
   }