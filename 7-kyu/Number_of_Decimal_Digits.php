<?php
  
function digits(int $n): int {
  return strlen((string)abs($n));
}