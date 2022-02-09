<?php

$size = 5; //in case we would want to take input from the user later
for ($i=1; $i <= $size; $i++) {
    $numbers[] = $i;
}

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