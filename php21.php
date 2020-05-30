<?php
// string reverse 
$name = "Saifur Rahman";
echo strrev($name);

echo PHP_EOL;

$length = strlen($name);
for ($i = 1; $i <= $length; $i++) {
    echo $name[$i * -1];
}

// String slice and join
$str = "Hello BD, How are you?";
$parts = explode(" ", $str);
print_r($parts);

$join = join(" ", $parts);
echo $join;

echo PHP_EOL;

$string = "Hello World,World is so beautiful.";
$tok = strtok($string, " ,");
while ($tok != false) {
    echo $tok . PHP_EOL;
    $tok = strtok(" ,");
}

echo PHP_EOL;
$parts2 = str_split($string);
print_r($parts2);

echo PHP_EOL;
$parts3 = preg_split("/ |,/", $string);
print_r($parts3);
echo "----- \n";
$count = count($parts3);
for ($i = 0; $i < $count; $i++) {
    echo strrev($parts3[$i]) . PHP_EOL;
}
echo "==== \n";
echo strpos($string, "so");

$replaceText = str_replace("so", "very", $string, $count);
echo PHP_EOL;
echo $replaceText;
echo PHP_EOL;
echo "Total replace word: {$count}";