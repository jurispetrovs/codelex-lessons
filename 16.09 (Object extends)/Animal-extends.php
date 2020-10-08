<?php

Class Animal {
    private string $name;
    private int $weight;
    public function __construct(string $name, int $weight) {
        $this->name = $name;
        $this->weight = $weight;
    }
    public function name(): string {
        return $this->name;
    }
    public function weight(): int {
        return $this->weight;
    }
    protected function weigthFormula(): int {
        return 1.4;
    }
}

class Turtle extends Animal { //nasledie
    public function weight(): int
    {
        $weight = parent::weight();
        return $weight * $this->weigthFormula();
    }
}
class Dog extends Animal { //nasledie
    public function weight(): int {
        $weight = parent::weight();
        return $weight * 0.5;
    }
}

$animals = [
    new animal("Dzeris", 100),
    new Turtle("Donatello", 200),
    new Dog("Reksis", 50)
];

foreach ($animals as $animal) {
    echo $animal->name() . " sver " . $animal->weight() . PHP_EOL;
}