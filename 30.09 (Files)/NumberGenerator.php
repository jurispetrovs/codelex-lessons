<?php

class NumberGenerator
{
    private StorageInterface $storage;

    private int $min;
    private int $max;

    private array $numbers;

    public function __construct(StorageInterface $storage, int $min = 1, int $max = 100)
    {
        $this->storage = $storage;
        $this->min = $min;
        $this->max = $max;

        $this->numbers = $storage->load();
    }

    public function getNumber(): int
    {
        $number = rand($this->min, $this->max);
        $this->add($number);
        return $number;
    }

    public function add(int $number): void
    {
        $this->numbers[] = $number;
    }

    public function getAllNumbers(): array
    {
        return array_filter($this->numbers);
    }

    public function getAvg(): float
    {
        return array_sum($this->getAllNumbers()) / count($this->getAllNumbers());
    }

    public function save(): void
    {
        $this->storage->store($this->getAllNumbers());
    }
}