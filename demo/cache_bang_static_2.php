<?php
// function getValue() {

//     static $value;

//     if (is_null($value)) {
//         $value = ...; // Xu ly o day
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
$object1 = new A();
$object2 = new A();
printf("\$o1->i: %d\n", $object1->i); // outputs "$o1->i: 1"
printf("\$o2->i: %d\n", $object2->i); // outputs "$o2->i: 2"
?>