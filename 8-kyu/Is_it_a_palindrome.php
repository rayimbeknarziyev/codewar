<?php

function isPalindrome(string $str): bool {
    $str_lower = strtolower($str);
       return $str_lower === strrev($str_lower);
}