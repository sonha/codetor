<?php
/**
 * TODO : Codeto Training PHP
 * @author : SonHA (hason61vn@gmail.com)
 */
interface A {
    public function say();
}


class B implements A {
    public function say(){
        echo 'Hello world';
    }
}


$b = new B();
$b->say();
