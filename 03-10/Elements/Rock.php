<?php

class Rock extends AbstractElement implements ElementInterface
{
    protected array $beatable = [
        Scissors::class
    ];
}
