<?php


function zeroFuel(int $distanceToPump, int $mpg, int $fuelLeft): bool {
    return ($mpg * $fuelLeft) >= $distanceToPump;
}

