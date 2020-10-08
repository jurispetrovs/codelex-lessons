<?php


/*interface CanPutInBasketInterface
{
    public function name();
}

class Tomato implements CanPutInBasketInterface
{
    public function name()
    {
        return 'Tomato';
    }
}

class Potatoe implements CanPutInBasketInterface
{
    public function name()
    {
        return 'Potatoe';
    }
}

class Apple
{
}

class Basket
{
    public array $items = [];

    public function add(CanPutInBasketInterface $item): void
    {
        $this->items[] = $item;
    }
}

$basket = new Basket();
$basket->add(new Tomato());
$basket->add(new Potatoe());
//$basket->add(new Apple);