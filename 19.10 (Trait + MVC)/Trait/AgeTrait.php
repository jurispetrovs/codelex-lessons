<?php

trait AgeTrait
{
    public function getAge(): int
    {
        return $this->age + 10;
    }
}