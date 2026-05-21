<?php

function mouth_size($animal) {
    $animal_lower = strtolower($animal);
    if ($animal_lower == "alligator") {
        return "small";
    } else {
        return "wide";
    }
}