<?php
/**
 * TODO : Codeto Training PHP
 * @author : SonHA (hason61vn@gmail.com)
 */
class test{
    public function __call($name, $arguments)
    {
        if ($name === 'test'){
            if(count($arguments) === 1 ){
                return $this->test1($arguments[0]);
            }
            if(count($arguments) === 2){
                return $this->test2($arguments[0], $arguments[1]);
            }
        }
    }

    private function test1($data1)
    {
       echo $data1;
    }

    private function test2($data1,$data2)
    {
       echo $data1.' '.$data2;
    }
}

$test = new test();
$test->test('one argument'); //echoes "one argument"
$test->test('two','arguments'); //echoes "two arguments"







?>