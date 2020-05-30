<?php
$info = "Saifur Rahman 01839100961 saifur703@gmail.com";
$parts = sscanf($info, "%s %s %s %s");
print_r($parts);

sscanf($info, "%s %s %s %s", $fname, $lname, $mobile, $email);
echo $fname;

echo PHP_EOL;

echo "Hexacode: \n";
$hex = "#F7F2FF";
sscanf($hex, "#%2x %2x %2x", $red, $green, $blue);
echo $red . PHP_EOL;
echo $green . PHP_EOL;
echo $blue . PHP_EOL;