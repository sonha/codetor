<?php
$a[0] = 2;
$a[1] = 3;
$a[2] = 1;
$a[3] = 5;
$a[4] = 7;
$a[5] = 6;

function solution($array) { 
    $max = max($array);
    $real_total = $max * ($max + 1) / 2;
    $current_total = 0;
    for($i=0; $i < count($array); $i++) {
        $current_total += $array[$i];
    }
    
    $result = $real_total- $current_total;
    
    var_dump($result );
    
}

solution($a);

?>