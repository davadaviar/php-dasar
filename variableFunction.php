<?php

function foo() {
    echo "Foo". PHP_EOL;
}

function bar() {
    echo "Bar" . PHP_EOL;
}

$functionCallback = "foo";
$functionCallback();

$functionCallback = "bar";
$functionCallback();

function sayHello(string $name, $filter) {
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction(string $name): string {
    return "Sampel $name";
}

sayHello("Eko", "sampleFunction");