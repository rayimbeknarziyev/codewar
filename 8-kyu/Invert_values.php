<?php

function invert(array $a): array {
    $result = [];
    foreach($a as $b){
      $result[] = $b * -1;
    }
    return $result;
  }