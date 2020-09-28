<?php

namespace App\Fruits;

class Fruit {
    private string $name;
    public function __construct(string $name) {
        $this->name = $name;
    }
    public function getName(): string
    {
        return $this->name;
    }
}