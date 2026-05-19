<?php

function potatoes($p0, $w0, $p1) {
    $w1 = $w0 * (100 - $p0) / (100 - $p1);
    return (int)$w1; 
}