<?php

function findIt(array $seq) : int
{
   $result = array_count_values($seq);
  
  foreach($result as $nums => $count){
    if($count % 2 !== 0){
      return $nums;
    }
  }
}