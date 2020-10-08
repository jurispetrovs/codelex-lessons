<?php

interface City {
    public function getName(): string;
    public function getSize(): string;
}

class Riga implements City {

    public function getName(): string
    {
        return 'Riga';
    }

    public function getSize(): string
    {
        return 'Big City';
    }
}

class Salaspils implements City {

    public function getName(): string
    {
        return 'Salaspils';
    }

    public function getSize(): string
    {
        return 'Small City';
    }
}

class Limbazi implements City {

    public function getName(): string
    {
        return 'Limbazi';
    }

    public function getSize(): string
    {
        return 'Small City';
    }
}

Class CountryCollection {
    public array $cities = [];
    public function add(City $city): void {
        $this->cities[] = $city;
    }
    public function all(): array {
        return $this->cities;
    }
}

$countryCollection = new CountryCollection();
$countryCollection->add(new Riga());
$countryCollection->add(new Salaspils());
$countryCollection->add(new Limbazi());

foreach ($countryCollection->all() as $city) {
    if($city->getSize() === 'Big City')
    {
        echo $city->getName() . ' has mayor' . PHP_EOL;
    } else {
        echo $city->getName() . " hasn't mayor" . PHP_EOL;
    }
}