<?php 
function fact_type1($a) {
    if ($a < 2) {
        return 1;
    } else {
        return $a * fact_type1($a-1);
    }
}

function fact($num)
{
    $res = 1;
    for ($n = $num; $n >= 1; $n--) 
        $res = $res*$n;
    return $res;
}
echo fact(3)."<br>";
echo fact_type1(4);
?>