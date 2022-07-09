<?php

$names = ["Dava", "Daviar", "Saputra"];

for ($i = 0; $i < count($names); $i++) {
    echo "data ke $i = $names[$i]" . PHP_EOL;
};

foreach ($names as $name) {
    echo "$name" . PHP_EOL;
}

$fullName = [
    "first_name" => "Dava",
    "middle_name" => "Daviar",
    "last_name" => "Saputra",
];

foreach ($fullName as $key => $value) {
    echo "$key = $value" . PHP_EOL;
}