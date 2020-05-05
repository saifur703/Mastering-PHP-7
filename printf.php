<?php 

$s1 = "Saifur";
$s2 = "Rahman";
printf("%s %s", $s1, $s2); // Saifur Rahman

echo PHP_EOL;

// Must be wrapped single quote
printf('%2$s %1$s', $s1, $s2); // Rahman Saifur
