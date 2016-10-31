<?php
function getMultiArray($level) {
    $result = $level;
    for ($i = 1; $i < $level; $i++) {
        $result = [$result];
    }
    return $result;
}

function strange($value) {
    $result = [];
    for ($i = 1; $i <= $value; $i++) {
        $result[$i] = getMultiArray($i);
    }
    return $result;
}

var_dump(strange(5));
