<?php

$start = 4;
$end = 10;

function dont_give_me_five(int $start, int $end)
{
    $count = 0;
    for ($i = $start; $i <= $end; $i++) {
        $son = $i .= "";
        if (!str_contains($son, "5")) {
            $count++;
        }
    }
    return $count;
}

echo dont_give_me_five($start, $end);
