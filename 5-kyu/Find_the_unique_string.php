<?php

$findUniq = [ 0, 0, 0.55, 0, 0 ];

function find_uniq($a)
{
    if ($a[0] !== $a[1]) {
        $base = $a[0];

    } else {
        $base = ($a[0] === $a[2]) ? $a[0] : $a[1];
    }

    foreach ($a as $number) {
        if ($number !== $base) {
            return $number;
        }
    }
}

print_r(find_uniq($findUniq));