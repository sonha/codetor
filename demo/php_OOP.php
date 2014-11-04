<?php 
 
class MyClass 
{ 
    public $prop1 = "I'm a class property!"; 
 
    public function __construct() 
    { 
        echo 'The class "', __CLASS__, '" was initiated!<br />'; 
    } 
 
    public function __destruct() 
    { 
        echo 'The class "', __CLASS__, '" was destroyed.<br />'; 
    } 
 
    public function __toString() 
    { 
        echo "Using the toString method: "; 
        return $this->getProperty(); 
    } 
 
    public function setProperty($newval) 
    { 
        $this->prop1 = $newval; 
    } 
 
    public function getProperty() 
    { 
        return $this->prop1 . "<br />"; 
    } 
} 
 
class MyOtherClass extends MyClass 
{ 
     public function __construct() 
    { 
        echo 'Day la mot ham khoi tao cua "', __CLASS__, '" ham khoi tao khac!<br />'; 
    } 
    
    public function newMethod() 
    { 
        echo 'From a new method in "', __CLASS__, '".<br />'; 
    } 
} 
 
// Tạo đối tượng 
$newobj = new MyOtherClass; 
 
// Echo object ra dạng chuỗi 
echo $newobj->newMethod(); 
 
// Sử dụng một phương thức của class cha 
echo $newobj->getProperty(); 
 
?>