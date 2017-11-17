<?php
interface Shape {
    const SQUARE = 1;
    const CIRCLE = 2;
    const PYRAMID = 3;
    
    function draw();
}

class Circle implements Shape {
    public function draw() {
        echo 'Ve hinh tron';
    }
}

class Square implements Shape {
    public function draw() {
        echo 'Ve hinh vuong';
    }
}

class ShapeFactory {
    public function getShape($type) {
        switch($type) {
            case Shape::SQUARE:
                return new Square;
                break;
             case Shape::CIRCLE:
                return new CIRCLE;
                break;  
            default:
                return null;
                break;
        }
            
    }
}


$factory = new ShapeFactory();
$shapeCircle = $factory->getShape(Shape::CIRCLE);
$shapeCircle->draw();

?>