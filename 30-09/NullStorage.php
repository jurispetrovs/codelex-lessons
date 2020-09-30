<?php

class NullStorage implements StorageInterface
{
    public function load(): array
    {
        return [];
    }

    public function store(array $numbers): void
    {

    }
}