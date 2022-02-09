<?php

$operand = $argv[1];
$num1 = $argv[2];
$num2 = $argv[3];

if ($operand === '*') $result = $num1 * $num2;
elseif ($operand === '-') $result = $num1 - $num2;
elseif ($operand === '+') $result = $num1 + $num2;

echo "$num1 $operand $num2 = $result";