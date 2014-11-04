<?php
//link tham khao 
//http://www.nhatanh.net/blog/php-design-pattern-topic-3-observer.html
header('Content-Type: text/html;charset=utf8');

abstract class Observer {

    abstract function update(Subject $subject);

}

abstract class Subject {

    abstract function attach(Observer $observer);

    abstract function detach(Observer $observer);

    abstract function notify();
}

class NongDan extends Subject {

    private $_observers;
    private $_name;
    private $_pet;

    function __construct($name) {
        $this->_observers = array();
        $this->_name = $name;
        echo "Khởi tạo Nông dân  <b>{$this->_name}</b><br>";
    }

    public function getName() {
        return $this->_name;
    }

    public function setName($name) {
        $this->_name = $name;
    }

    public function buyPet($pet) {
        $this->_pet = $pet;
        echo "<b>{$this->_name}:</b> Mới mua $pet <br>";
        $this->notify();
    }

    public function getPet() {
        return $this->_pet;
    }

    public function attach(Observer $observer) {
        echo "<font color='green'>Cho phép <b>{$observer->getName()}</b> quan sát <b>{$this->getName()}</b> <br></font>";
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer) {
        foreach ($this->observers as $key => $obj) {
            if ($obj->equals($observer)) {
                echo "<font color=red>Không cho phép <b>{$observer->getName()}</b> quan sát <b>{$this->getName()}</b> nữa!<br></font>";
                unset($this->observers[$key]);
            }
        }
    }

    public function notify() {
        foreach (array_keys($this->observers) as $key) {
            $this->observers[$key]->update($this);
        }
    }

}

class TromCho extends Observer {

    private $_name;

    function __construct($name) {
        $this->_name = $name;
        echo "Khởi tạo Trộm Chó <b>{$this->_name}</b><br>";
    }

    public function getName() {
        return $this->_name;
    }

    public function update(Subject $subject) {
        if ($subject instanceof NongDan) {
            if ($subject->getPet() === "chó") {
                echo "<font color=brown size=4><b>{$this->_name}:</b> phát hiện và bắt trộm chó của <b>{$subject->getName()}</b><br></font>";
            }
        }
    }

    public function equals(Observer $observer) {
        if ($observer instanceof TromCho) {
            if ($observer->getName() === $this->getName()) {
                return true;
            }
            return false;
        }
        return false;
    }

}

$nongdan = new NongDan('Hiếu');
$tromcho = new TromCho('Thắng');
$nongdan->attach($tromcho);
$nongdan->buyPet('gà');
$nongdan->buyPet('chó');
$nongdan->buyPet('lợn');
$nongdan->buyPet('chó');
$nongdan->detach($tromcho);
$nongdan->buyPet('chó');
$nongdan->buyPet('mèo');