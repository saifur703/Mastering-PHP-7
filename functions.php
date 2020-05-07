<?php 


/** 
 * Unlimited Arguments 
 */
function addNumber(...$numbers):int{
    $result = 0;
    for($i=0; $i< count($numbers); $i++){
        $result += $numbers[$i];
    }
    return $result;
}
echo addNumber(5, 2, 3); // Output -> 10



