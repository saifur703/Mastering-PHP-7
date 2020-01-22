<?php 


$veryOld = 0;
$old = 1;
$new = 1;

for($i = 1; $i <= 10; $i++){
    echo $veryOld . " ";
    $old = $new;
    $new = $old + $veryOld;

    $veryOld = $old;
}
