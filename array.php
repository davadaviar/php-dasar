<?php

$angka = array(1,2,3,4,5);
var_dump($angka);

$nama = ["Dava", "Daviar", "Saputra"];
var_dump($nama[1]);

$nama[] = "Joko";
var_dump($nama);

$nama[0] = "Alex";
var_dump($nama);

unset($nama[2]);
var_dump($nama);

var_dump(count($nama));

$dava = [
    "id" => "Dava",
    "name" => "Dava Daviar Saputra",
    "age" => 21,
    "address" => [
        "city" => "Surabaya",
        "posCode" => 60132
    ]
];

var_dump($dava);
var_dump($dava["name"]);
var_dump($dava["address"]["city"]);