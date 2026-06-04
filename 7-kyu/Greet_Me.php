<?php

$name = "Rayim";
function greet($name) {
    $kichikQilish = strtolower($name);
  $firstCharUp = ucfirst($kichikQilish);
  $lastChange = "Hello" . " " . $firstCharUp . "!";

  return $lastChange;
}

echo greet($name);