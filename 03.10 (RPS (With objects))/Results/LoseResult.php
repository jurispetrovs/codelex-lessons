<?php

class LoseResult implements Result
{
    public function getMessage(): string
    {
        return 'Lose'. PHP_EOL;
    }
}
