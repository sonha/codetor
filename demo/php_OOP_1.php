<?php
//SonHA: coding here
class Admin {
    
    public $name = 'Son';
    public $age = 25;
    public $university = 'PTIT';
    
    public function __construct() {
        echo 'khoi tao doi tuong admin<br>';
    }
    
    public function __destruct() {
        echo 'huy doi tuong admin<br>';
    }
    
    public function login() {
        $this->checkLogin('son');
    }
    
    public function checkLogin($user) {
        if($user == $this->name) {
            echo 'Login thanh cong<br>';
        } else {
            echo 'Login that bai<br>';
        }
    }
}

$admin = new Admin();
$admin->login();
?>