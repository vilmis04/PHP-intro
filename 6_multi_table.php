<?php

$size = $argv[1];
$numbers = range(1,$size);

foreach ($numbers as $number) {
    foreach ($numbers as $multiplier) {
        $result = $number*$multiplier;
        if (strlen("$result") === 1) {
            echo $result . " | ";
        } else {
            echo $result . "| ";
        }
    }
    echo PHP_EOL;
}