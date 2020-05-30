<?php
$name = "Saifur Rahman";

$str = <<<EOD
hello 
how are you, {$name}?
EOD;
echo $str . "\n";

for ($i = 33; $i < 125; $i++) {
    printf("ASCII Value {$i} is =  %s \n", chr($i));
}
echo PHP_EOL;
echo "HEllo \n";