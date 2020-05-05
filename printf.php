<?php 

$s1 = "Saifur";
$s2 = "Rahman";
printf("%s %s", $s1, $s2); // Saifur Rahman

echo PHP_EOL;

// Must be wrapped single quote
printf('%2$s %1$s', $s1, $s2); // Rahman Saifur


// Number system 
echo PHP_EOL;
printf('Decimal %1$d to Binary is %1$b', 12); // Decimal 12 to Binary is 1100
echo PHP_EOL;


/** 
 * 123
 * 005
 * 034
 */
$n1 = 123;
$n2 = 5;
$n3 = 34;
printf('%04d', $n1); // 0123
echo PHP_EOL;
printf('%04d', $n2); // 0005
echo PHP_EOL;
printf('%04d', $n3); // 0034
echo PHP_EOL;



/** 
 * 123.4567
 * 005.2300
 * 034.1000
 */
$f1 = 123.4567;
$f2 = 5.23;
$f3 = 34.1;
printf('%06.2f', $f1); // 123.46
echo PHP_EOL;
printf('%06.2f', $f2); // 005.23
echo PHP_EOL;
printf('%06.2f', $f3); // 034.10

