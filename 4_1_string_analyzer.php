<?php

$str = $argv[1];

foreach (explode(' ', $str) as $word) {
    echo 'Word: ' . '"' .  $word . '" ';
    echo 'Length: ' . '"' . strlen($word) . '"' . PHP_EOL;
}