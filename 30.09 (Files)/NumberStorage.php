<?php

class NumberStorage implements StorageInterface
{
    private string $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function load(): array
    {
       return (array) explode(' ', file_get_contents($this->path));
    }
    public function store(array $numbers): void
    {
        file_put_contents($this->path, implode(' ', $numbers));
    }
}