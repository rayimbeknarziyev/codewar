<?php
function contamination(string $text, string $char): string
{
    if (strlen($text) == 0 || strlen($char) == 0) {
        return "";
    }

    return str_repeat($char, strlen($text));
}