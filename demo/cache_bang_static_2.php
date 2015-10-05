<?php
// function getValue() {

//     static $value;

//     if (is_null($value)) {
//         $value = ...; // Compute
//     }

//     return $value;
// }
// Example 1
class A {
  public function __construct() {
    static $i = 0;
    $i++;
    $this->i = $i;
  }
}
$o1 = new A();
$o2 = new A();
printf("\$o1->i: %d\n", $o1->i); // outputs "$o1->i: 1"
printf("\$o2->i: %d\n", $o2->i); // outputs "$o2->i: 2"
?>