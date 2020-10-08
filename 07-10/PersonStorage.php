<?php

class PersonStorage
{
    private $resource;

    private array $persons;

    public function __construct()
    {
        $this->resource = fopen('./names.csv', 'rw+');

        $this->loadPersons();
    }

    public function getByName(string $name): Person
    {
        foreach ($this->persons as $person) {
            /** @var Person $person */
            if ($person->getName() === $name) {
                return $person;
            }
        }

        $person = $this->getPersonFromAPI($name);
        fputcsv($this->resource, $person->toArray());

        return $person;
    }

    private function getPersonFromAPI(string $name): Person
    {

        $response = file_get_contents('https://api.agify.io/?name=' . $name);
        $person = json_decode($response, true);

        return new Person(
            $person['name'],
            $person['age'],
            $person['count']
        );
    }

    private function loadPersons(): void
    {
        while (!feof($this->resource)) {
            $personData = (array)fgetcsv($this->resource);

            $this->persons[] = new Person(
                (string)$personData[0],
                (int)$personData[1],
                (int)$personData[2]
            );
        }
    }
}