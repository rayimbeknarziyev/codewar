<?php

function adjacentElementsProduct($inputArray) {
    $max = $inputArray[0] * $inputArray[1];

    for ($i = 1; $i < count($inputArray) - 1; $i++) {
        $product = $inputArray[$i] * $inputArray[$i + 1];

        if ($product > $max) {
            $max = $product;
        }
    }

    return $max;
}   