<?php

require_once './app/Person.php';
require_once 'app/Fruit.php';
require_once 'app/Fruits/Fruit.php';

use App\Fruits\Fruit;
use App\Person;
use App\Fruit as AppFruit;

$person = new Person('Juris');
var_dump($person->getName());

$fruit = new Fruit('Apple');
var_dump($fruit->getName());

$fruit = new AppFruit('Orange');
var_dump($fruit->getName());