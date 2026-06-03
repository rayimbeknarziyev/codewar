<?php


$s = "This website is for losers LOL!";
function disemvowel(string $s)
{
    $vowels = ['a', 'e', 'o', 'i', 'u'];

    $newString = str_replace($vowels, "", $s);

    return $newString;
}

echo disemvowel($s);
