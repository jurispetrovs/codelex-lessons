<?php

interface StorageInterface
{
    public function load(): array;
    public function store(array $numbers): void;
}