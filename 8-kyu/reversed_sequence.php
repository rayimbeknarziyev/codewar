<?php

function reverseSeq(int $n): array
{
    $result = [];
    for ($i = 1; $i <= $n; $i++) {
        $result[] = $i;
    }
    return array_reverse($result);
}
;
