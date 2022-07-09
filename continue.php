<?php

for ($counter = 1; $counter <= 20; $counter++) {

    if ($counter % 2 == 0) {
        continue;
    }
    echo "Bilangan ke $counter" . PHP_EOL;
}

