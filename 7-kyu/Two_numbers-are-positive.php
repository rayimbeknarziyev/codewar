<?php
function twoArePositive(int $a, int $b, int $c): bool {
 $count = 0;

    if ($a > 0) {
        $count++;
    }

    if ($b > 0) {
        $count++;
    }

    if ($c > 0) {
        $count++;
    }

    return $count === 2;
}