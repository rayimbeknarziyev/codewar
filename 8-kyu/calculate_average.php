<?php

function find_average($array): float
{
    if (empty($array)) {
        return 0;
    }
    return (float) (array_sum($array) / count($array));
}