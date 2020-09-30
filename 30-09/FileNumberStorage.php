<?php

class FileNumberStorage implements StorageInterface
{
    private string $path;

    private const DELIMITER = ';';

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function load(): array
    {
        return (array)explode(self::DELIMITER, file_get_contents($this->path));
    }

    public function store(array $numbers): void
    {
        file_put_contents($this->path, implode(self::DELIMITER, $numbers));
    }
}