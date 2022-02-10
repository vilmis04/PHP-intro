<?php

$userInput = $argv[1];
if ($userInput === 'asc') {
    $direction = 1;
} elseif ($userInput === 'dsc') {
    $direction = -1;
} else {
    echo 'Choose which direction to sort: asc or dsc';
}

$data = [1, 99, 15, 17, 14, 165, 78, 35, 99, 225, 9992, 34, 56, 87, 0, -1];
$sorted = [];

while (count($sorted) !== count($data)) {
    $number = $direction * PHP_INT_MAX;
    $index = null;
    for ($i = 0; $i < count($data); $i++) {
        if ($data[$i] === null) continue;
        if ($userInput === 'asc' && $number > $data[$i]) {
            $number = $data[$i];
            $index = $i;
        } elseif ($userInput === 'dsc' && $number < $data[$i]) {
            $number = $data[$i];
            $index = $i;
        }
    }
    $data[$index] = null;
    $sorted[] = $number;
}

foreach($sorted as $number) {
    echo $number . PHP_EOL;
}
