<?php
$fibo = array();
$fibo_odd = array();
$fibo[0] = 1;
$fibo[1] = 1;
$sum = 0;
for($i = 1; ; $i++) {
    $fibo[$i+1] = $fibo[$i] + $fibo[$i-1];
    if($fibo[$i+1] > 10000){
        unset($fibo[$i+1]);
        break;
    } 
    if($fibo[$i+1]%2 == 0){
        $fibo_odd[] = $fibo[$i+1];
        $sum += $fibo[$i+1];
    }    
    }
    echo 'Tong cac so fibo chan nho hon 10000 la '.$sum;
?>