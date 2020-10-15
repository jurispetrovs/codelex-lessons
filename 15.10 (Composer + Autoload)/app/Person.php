<?php

namespace App;

use Carbon\Carbon;

class Person
{
    public Carbon $bornAt;

    public function __construct()
    {
        $this->bornAt = (new Carbon('1992-01-08 10:00'));
    }

    public function bornAt(): string{
        return $this->bornAt->format('Y m d');
    }

}