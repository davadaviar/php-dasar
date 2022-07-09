<?php

function sumAll(...$values) {

    $result = 0;
    foreach ($values as $value) {
        $result += $value;
    }

    echo "Total : " . implode(",", $values) . " = $result" . PHP_EOL;
}

sumAll(1,2,3,4,5);