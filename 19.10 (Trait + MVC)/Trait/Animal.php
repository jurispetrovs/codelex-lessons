<?php

class Animal
{
    use AgeTrait;
    use MovementTrait;

    protected int $age;

    public function __construct(int $age)
    {
        $this->age = $age;
    }
}