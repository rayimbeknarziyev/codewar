<?php

function valid_spacing($s) {
    if ($s !== trim($s)) {
          return false;
      }
  
      return strpos($s, '  ') === false;
  }