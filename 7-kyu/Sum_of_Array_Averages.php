<?php

$arrays = [
    [3, 4, 1, 3, 5, 1, 4],
    [21, 54, 33, 21, 77]  
];
function sumAverage(array $arrays) {
    $Sum = 0;
    foreach ($arrays as $array) {
        $arrCount = count($array);
        $arrSum = array_sum($array);
        $overall = $arrSum / $arrCount;
        $Sum += $overall;
    }
    return $Sum;
}

echo sumAverage($arrays);