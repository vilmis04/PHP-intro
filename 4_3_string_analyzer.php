<?php

$unwantedChar = [',', '-', '.', ';', '?'];
$str = str_replace($unwantedChar, '', $argv[1]);

$wordArr = explode(' ', $str);
sort($wordArr, SORT_NATURAL | SORT_FLAG_CASE);

foreach($wordArr as $word) {
    echo 'Word: ' . '"' .  $word . '" ';
    echo 'Length: ' . '"' . strlen($word) . '"' . PHP_EOL;
}