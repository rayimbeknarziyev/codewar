<?php

function likes( $names ) {

    $count = count($names);
  
      switch ($count) {
          case 0:
              return "no one likes this";
          case 1:
              return $names[0] . " likes this";
          case 2:
              return $names[0] . " and " . $names[1] . " like this";
          case 3:
              return $names[0] . ", " . $names[1] . " and " . $names[2] . " like this";
          default:
              $othersCount = $count - 2;
              return $names[0] . ", " . $names[1] . " and " . $othersCount . " others like this";
      }
  }