<?php
/**
 * TODO : Codeto Training PHP
 * @author : SonHA (hason61vn@gmail.com)
 */
$demo = array('Hoc','Lap','Trinh');
echo '<pre>';
print_r($demo);
foreach($demo as $key => $value) {
    $value = strtoupper($value);
}
echo '<pre>';
print_r($demo);


?>