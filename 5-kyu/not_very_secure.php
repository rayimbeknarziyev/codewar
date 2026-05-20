<?php
  
function alphanumeric(string $s): bool {
    return preg_match("/^[a-zA-Z0-9]+$/",$s);
}