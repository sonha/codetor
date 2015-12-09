<?php
/**
 * TODO : Codeto Training PHP
 * @author : SonHA (hason61vn@gmail.com)
 */
abstract class A {
    public function say() {
        
    }
    public function hello(); //viet the nay la sai
}


class B extends A {
    public function say(){
        echo 'hello world';
    }
}


$b = new B();
$b->say();
?>