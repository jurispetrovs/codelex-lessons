<?php

class Person {
    protected string $name;
    protected ?string $surname; //?string or string or null
    public function __construct(string $name, string $surname = null) {
        $this->name = $name;
        $this->surname = $surname;
    }
    public function name(): string {
        return $this->name;
    }
    public function surname(): ?string {
        return $this->surname;
    }
}

$person = new Person("Janis", "Gitendorfs");
$person2 = new Person("Ilze");


var_dump($person, $person2);
echo $person->name() . PHP_EOL;
echo $person->surname() . PHP_EOL;