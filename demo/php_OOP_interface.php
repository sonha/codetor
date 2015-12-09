<?php 
interface  A {
    public function getName();
}

interface B extends A {
    public function getAge();
}

class C implements B {
    public function getName(){
      return 'Day la ham getName';
    }
    
     public function getAge(){
      return 'Day la ham getAge';
    }
}

$b = new C();
echo $b->getName();
?>