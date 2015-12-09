<?php
/**
 * TODO : Codeto Training PHP
 * @author : SonHA (hason61vn@gmail.com)
 */
interface A {
    public function say();
    protected function run();
    //interface chi duoc phep khai bao cac function la public
    //neu de la protected va private thi se bao loi
}


class B implements A {
    public function say(){
        echo 'Hello world';
    }
    
    protected function run() {
        echo 'I am a runner';
    }
}


$b = new B();
$b->say();
$b->run();
