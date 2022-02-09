<?php

$unwantedChar = [',', '-', '.', ';', '?'];
$str = str_replace($unwantedChar, '', $argv[1]);

$wordArr = explode(' ', $str);

if ($argv[2]) sort($wordArr, SORT_NATURAL | SORT_FLAG_CASE);

foreach($wordArr as $word) {
    echo 'Word: ' . '"' .  $word . '" ';
    echo 'Length: ' . '"' . strlen($word) . '"' . PHP_EOL;
}

//first task: 

// $text = $argv[1];

// foreach (explode(' ', $text) as $word) {
//     echo $word . PHP_EOL;
// }
