<?php

function feast($beast, $dish)
{
    $birinchisiBeast = $beast[0];
    $birinchisiDish = $dish[0];


    $oxirgisiBeast = $beast[-1];
    $oxirgisiDish = $dish[-1];

    return $birinchisiBeast === $birinchisiDish && $oxirgisiBeast === $oxirgisiDish ? true : false;

}