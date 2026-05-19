<?php

function printerError($s) {
    $errors = preg_match_all('/[n-z]/', $s);
    return $errors . "/" . strlen($s);
}