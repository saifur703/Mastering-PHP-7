<?php

/** 
 * Function
 */

include_once("function.php");
echo (add(5, 6));
echo PHP_EOL;
echo (add(25, 26));

echo PHP_EOL;

$x = 13;
if (isEven($x)) {
    echo "{$x} is Even Number";
} else {
    echo "{$x} is Odd Number";
}

echo PHP_EOL;

/** 
 * Unlimited Arguments 
 */
function addNumber(...$numbers): int
{
    $result = 0;
    $counter = count($numbers);
    for ($i = 0; $i < $counter; $i++) {
        $result += $numbers[$i];
    }
    return $result;
}
echo addNumber(5, 2, 3, 7);