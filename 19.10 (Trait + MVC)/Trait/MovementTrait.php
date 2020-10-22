<?php

trait MovementTrait
{
    public function getMovement(): string
    {
        if($this->age > 40) {
            return 'Slow';
        }
        return 'Fast';
    }
}