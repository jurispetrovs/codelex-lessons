<?php

require_once 'AgeTrait.php';
require_once 'MovementTrait.php';
require_once 'Animal.php';
require_once 'Person.php';

$person = new Person(10);
$animal = new Animal(20);

echo $person->getAge();
echo $person->getMovement();
echo $animal->getAge();
echo $animal->getMovement();