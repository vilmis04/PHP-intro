<?php

$number = $argv[1];
$i = 1;
while ($i < $number) {
    if ($i % 3 === 0) echo $i . PHP_EOL;

    $i++;
}


// Expected input: 2_number_divider_by_7.php 61
// Expected output:
// 3
// 6
// 9
// 12
// ...
// 60