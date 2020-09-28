<?php

/*interface ShapeInterface {
    public function getArea(): float;
}

class Square implements ShapeInterface {
    public function getArea(): float
    {
        return 10.1;
    }
}

class Circle implements ShapeInterface {

    public function getArea(): float
    {
        return 15;
    }
}

$square = new Square();
$circle = new Circle();

$square->getArea();
$shape = 'circle';

switch ($shape) {
    case 'circle':
        echo $circle->getArea();
        break;
}
