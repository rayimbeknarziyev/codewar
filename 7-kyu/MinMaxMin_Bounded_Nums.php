<?php


$array = [-1, 4, 5, -23, 24];
function minMinMax($array)
{
    $min = min($array);
    $max = max($array);


    for ($i = $min; $i <= $max; $i++) {
        if (!in_array($i, $array)) {
            $middle = $i;
            break;
        }
    }
    return [$min, $middle, $max];
}

var_dump (minMinMax($array));
