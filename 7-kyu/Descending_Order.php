<?php

function descendingOrder(int $n): int {
    $srtNum = (string) $n;
    $arrNum = str_split($srtNum);
    rsort($arrNum);
    $num = (int) implode('', $arrNum);
    return $num;
  }