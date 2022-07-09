<?php

function sayHello(string $name, callable $filter) {

    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Dava", "strtolower");