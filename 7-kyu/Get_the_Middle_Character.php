<?php

function getMiddle($text) {
    $len  = strlen($text);
  
 $middle = (int) floor($len / 2);
  if($len % 2 == 0){
    return substr($text,$middle -1, 2);
  }else{
     return substr($text,$middle, 1);
  }
}