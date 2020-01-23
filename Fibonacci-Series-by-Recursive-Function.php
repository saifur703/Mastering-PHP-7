<?php 

// Fibonacci Series by Recursive Function

function fibonacci($old, $new, $end){
    static $start;
    $start = $start ?? 1;

    if($start > $end){
        return false; 
    }
    $start++;

    echo $old."<br/>";
    $_temp = $old + $new;

    $old = $new;
    $new = $_temp;

    fibonacci($old, $new, $end);
}
fibonacci(0,1,15);

