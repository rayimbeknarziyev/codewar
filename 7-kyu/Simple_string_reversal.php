<?php

function solve($str, $a, $b) {
    $len = strlen($str);
    $b = min($b, $len - 1);
    $start = substr($str, 0, $a);
    $middle = substr($str, $a, $b - $a + 1);
    $end = substr($str, $b + 1);
    return $start . strrev($middle) . $end;
}