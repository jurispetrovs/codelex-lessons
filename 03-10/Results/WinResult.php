<?php

class WinResult implements Result
{
    public function getMessage(): string
    {
        return 'Win' . PHP_EOL;
    }
}
