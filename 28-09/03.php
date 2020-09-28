<?php

/*interface CanPutInBasketInterface { }

class Apple implements CanPutInBasketInterface { }

class Car { }

class Cat implements CanPutInBasketInterface { }

class Tank { }

class Basket {
    public array $items = [];
    public function add(CanPutInBasketInterface $item): void {
        $this->items[] = $item;
    }
}

$basket = new Basket();
$basket->add(new Cat());
//$basket->add(new Tank()); //TypeError