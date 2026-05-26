<?php

function multiples($m, $n) {
    $result = [];

    for ($i = 1; $i <= $m; $i++) {
        $result[] = $i * $n;
    }

    return $result;
}