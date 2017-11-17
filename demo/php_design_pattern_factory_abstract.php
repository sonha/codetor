<?php
abstract class AbstractFactory {
    const SQUARE = 1;
  abstract function getColor();
   abstract function getShape() ;
}
 class ShapeFactory extends AbstractFactory
{
    public function getShape() {
      echo 'Day la ham getShape';
    }
    public function getColor() {
     echo 'Day la ham getShape';
    }
}
abstract class ColorFactory extends AbstractFactory
{
    public function getColor() {
     echo 'Day la ham getShape';
    }
}
$shape = new ShapeFactory();
$shape->getShape();