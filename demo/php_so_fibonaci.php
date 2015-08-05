<?php
//SonHA: coding here
function fibonaci($a) {
    if($a == 1 || $a == 2) {
        return 1;
    } else {
        return (fibonaci($a-1) + fibonaci($a-2));
    }
}
$test = fibonaci(6);
echo $test;
?>