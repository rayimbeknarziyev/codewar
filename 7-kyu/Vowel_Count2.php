<?php
  
function getCount(string $str): int {
  $unlilarSoni = 0;
    $vowels = ['a', 'e', 'o', 'i', 'u'];

    for ($i = 0; $i < strlen($str); $i++) {

        if (in_array($str[$i],$vowels)) {
            $unlilarSoni++;
        }
        // var_dump($unlilarSoni);
    }
    return $unlilarSoni;
}