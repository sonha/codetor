<?php
$a = array(array(1, 2, 3), array(4, 5, 6));
echo '<pre>';
print_r($a);
// $b = array(array(1, 4), array(2, 5), array(3, 6));
$b = array();
function change($a) {
  
  foreach($a as $key => $value) {
      foreach($value as $key2 => $value2) {
          $b[$key2][] = $value2;
      }
  }
  return $b;
}

$b = change($a);
echo '<pre>';
print_r($b);
?>