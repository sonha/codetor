<?php
/**
 * Overloading is defining functions that have similar signatures, yet have different parameters. 
 * Overriding is only pertinent to derived classes, where the parent class has defined a method
 * and the derived class wishes to override that method.
 * In PHP, you can only overload methods using the magic method __call.
 * An example of overriding:
 * Đây là ví dụ về override
 */
class Foo {
   function myFoo() {
      return "Foo";
   }
}

class Bar extends Foo {
   function myFoo() {
      return "Bar";
   }
}

$foo = new Foo;
$bar = new Bar;
echo($foo->myFoo()); //"Foo"
echo($bar->myFoo()); //"Bar"
?>