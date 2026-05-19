<?php

function solution(array $a, $x): bool
{
    foreach ($a as $aa) {
        if ($aa === $x) {
            return true;
        }
    }
    ;
    return false;
}