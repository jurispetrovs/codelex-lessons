<?php

/*interface Animal {
    public function getName(): string;
}

interface Friendly {
    public function dieChance(): int;
}

interface Predator {
    public function dieChance(): int;
}

class Elephant implements Animal, Friendly
{
    public function getName(): string
    {
        return 'Elephant';
    }

    public function dieChance(): int
    {
        return 20;
    }
}

class Giraphe implements Animal, Friendly
{
    public function getName(): string
    {
        return 'Giraphe';
    }

    public function dieChance(): int
    {
        return 20;
    }
}

class Lion implements Animal, Predator
{
    public function getName(): string
    {
        return 'Lion';
    }

    public function dieChance(): int
    {
        return 70;
    }
}

class BlackPanthera implements Animal, Predator
{
    public function getName(): string
    {
        return 'Black panthera';
    }

    public function dieChance(): int
    {
        return 70;
    }
}

Class AnimalCollection {
    public array $animals = [];
    public function add(Animal $animal): void {
        $this->animals[] = $animal;
    }
    public function all(): array {
        return $this->animals;
    }
}

$animalCollection = new AnimalCollection();
$animalCollection->add(new Elephant());
$animalCollection->add(new Giraphe());
$animalCollection->add(new Lion());
$animalCollection->add(new BlackPanthera());

$animalWantEat = true;
while($animalWantEat) {
    foreach ($animalCollection->all() as $animal) {
        if($animal instanceof Friendly) {
            $aliceLiveChance = rand(1, 100);
            if($aliceLiveChance > $animal->dieChance()) {
                echo 'Great job, ' . $animal->getName() . ' was fed' . PHP_EOL;
            } else {
                echo 'Oh, ' . $animal->getName(). ' ate the Alice' . PHP_EOL;
                $animalWantEat = false;
                break;
            }
        } elseif ($animal instanceof Predator) {
            $aliceLiveChance = rand(1, 100);
            if($aliceLiveChance > $animal->dieChance()) {
                echo 'Great job, ' . $animal->getName() . ' was fed' . PHP_EOL;
            } else {
                echo 'Oh, ' . $animal->getName(). ' ate the Alice' . PHP_EOL;
                $animalWantEat = false;
                break;
            }
        }
    }
    $animalWantEat = false;
}

