<?php

function bonusTime($salary, $bonus) {
    $total = $bonus ? $salary * 10 : $salary;
     return "$" . $total;
 }