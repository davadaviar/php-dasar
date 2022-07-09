<?php

function factorialLoop($value) {

    $total = 1;
    for ($i = 1; $i <= $value; $i++) {
        $total *= $i;
    }

    return $total;
};

echo factorialLoop(5);

function factorialRecursive($value) {

    if ($value == 1) {
        return 1;
    } else {
       return $value * factorialRecursive($value - 1);
    }
}

echofactorialRecursive(5);