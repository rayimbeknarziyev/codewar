<?php

function longest($s1, $s2) {
    $combined = $s1 . $s2;
    $arr = str_split($combined);
    $unique = array_unique($arr);
    sort($unique);
    return implode('', $unique);
}
