<?php 
/** 
 * Ternary Operator 
 */

$n = 12;
$evenOdd = $n % 2 == 0 ? "Even Number" : "Odd Number";
echo $evenOdd;

echo PHP_EOL;

/** 
 * Nested Ternary Operator
 */
$n2 = 23;
$posNeg = ($n2 > 0) ? "Positive Number" : (($n2 < 0) ? "Negative Number" : "It's Zero");
echo $posNeg;

echo PHP_EOL;

$test = ($n2 == 23) ? "23" : (($n2 == 22) ? "22" : "nothing");
echo $test;

echo PHP_EOL; 

/** 
 * Switch case 
 */

 $num = 10;
 switch($num){
     case 0: 
        echo "Zero";
     break;
     case 1: 
        echo "One";
     break;
     case 2: 
        echo "Two";
     break;
     case 3: 
        echo "Three";
     break;
     case 4: 
        echo "Four";
     break;
     case 5: 
        echo "Five";
     break;
     case 6: 
        echo "Six";
     break;
     case 7: 
        echo "Seven";
     break;
     case 8: 
        echo "Eight";
     break;
     case 9: 
        echo "Nine";
     break;
     case 10: 
        echo "Ten";
     break;
     default: 
     echo "Anything else.";
 }

 echo PHP_EOL;

 /** 
  * Even add and Positive Negative
  */

$numb = -13;
$mod = $numb % 2; 
switch(true){
    case ($numb > 0 && $mod == 0) : 
    echo "Positive Even Number";
    break;

    case ($numb > 0 && $mod == 1) : 
        echo "positive Odd Number";
    break;

    case ($numb < 0 && $mod == 0) : 
        echo "Negative Even Number";
    break; 

    case ($numb < 0 && $mod == -1) : 
        echo "Negative Odd Number";
    break;

    default: 
    echo "Invalid Number";
}

echo PHP_EOL;
/** 
 * Operator Presidency 
 */

$f = false || true ; // true 
$e = false OR true ; // false 
var_dump($f, $e);

$b = true && false; // false 
$c = true AND false; // true 
var_dump($b, $c);