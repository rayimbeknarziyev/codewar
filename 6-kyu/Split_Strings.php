<?php

function solution($str) {
    if (strlen($str) % 2 !== 0) {
          $str .= '_';
      }
      
      return $str !== "" ? str_split($str, 2) : [];
  }