<?php


$list = [1, 2, 3, -4];
function maxDiff(array $list)
{
    if (count($list) <= 1) {
        return 0;
    } else {
        $listMin = min($list);
        $listMax = max($list);

        $answer = $listMax - $listMin;
        return $answer;
    }
}

maxDiff($list);
