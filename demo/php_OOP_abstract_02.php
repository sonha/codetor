<?php 
// class Fruit { 
//     private $color; 
    
//     public function eat() { 
//         //chew 
//         echo 'eat<br>';
//     } 
    
//     public function setColor($c) { 
//         $this->color = $c; 
//     } 
// } 
 //An abstract class is just like an interface,
 //but you can define methods in an abstract class whereas in an interface they are all abstract.
abstract class Fruit { 
    private $color; 
    
    abstract public function eat(); 
    
    public function setColor($c) { 
        $this->color = $c; 
    } 
} 

class Apple extends Fruit { 
    public function eat() { 
        //chew until core 
        echo 'eat df<br>';
    } 
} 

class Orange extends Fruit { 
    public function eat() { 
        //peel 
        //chew 
        echo 'pell, cheew<br>';
    } 
} 

$apple = new Apple(); 
$apple->eat(); 


$fruit = new Fruit(); 
$fruit->eat(); 

?> 
