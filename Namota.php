<?php

/** 
 * Namota
 */
function namota($number)
{
    for ($i = 1; $i <= 10; $i++) {
        $output = $number * $i;
        printf("%d x %d = %d \n", $number, $i, $output);
    }
}
namota(5);