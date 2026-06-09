<?php

function is_uppercase($str)
{
    $strUp = strtoupper($str);

    if ($str === $strUp) {
        return True;
    }else{
        return False;
    }
}
