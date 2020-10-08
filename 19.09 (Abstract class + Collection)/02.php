<?php

abstract class Fruit {
    public abstract function getFruitColour(): string;
    public function getName(): string {
        return get_class($this);
    }
}

class Apple extends Fruit {
    public function getFruitColour(): string
    {
        return 'red';
    }
}

class Orange extends Fruit {
    public function getFruitColour(): string
    {
        return 'orange';
    }
}

class Watermelon extends Fruit {
    public function getFruitColour(): string
    {
        return 'green';
    }
}

class FruitsMix {
    private $fruits = [];

    public function add(Fruit $fruit) {
        $this->fruits[] = $fruit;
    }
    public function all() {
        return $this->fruits;
    }
}

$fruits = new FruitsMix();
$fruits->add(new Apple());
$fruits->add(new Orange());
$fruits->add(new Watermelon());
$fruits->add(new Watermelon());
//$fruits->add(10); //TypeError
//$fruits->add('String'); //TypeError

foreach ($fruits->all() as $fruit) {
    echo $fruit->getName() . ' ' . $fruit->getFruitColour() . PHP_EOL;
}