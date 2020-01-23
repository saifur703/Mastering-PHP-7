<?php 

// Recursive function
function number($start, $end, $sep=1){
    if($start > $end){
        return false;
    }

    echo $start."<br/>";
    $start += $sep;

    number($start, $end, $sep);
}

number(5, 25, 5);

