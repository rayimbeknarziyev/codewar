<?php

function combat($health, $damage) {
  $newHealth = $health - $damage;
  if($newHealth <= 0){
    $newHealth = 0;
  }
  return $newHealth;
}