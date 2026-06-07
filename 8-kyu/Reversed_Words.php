<?php

function reverseWords($str) {
    $strrev = strrev($str);
    $strArr = explode(" ", $strrev);
    $compArr = array_map('strrev', $strArr);
    $result = implode(' ', $compArr);
    return $result;
  }