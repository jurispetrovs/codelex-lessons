<?php

declare(strict_types=1);

class Numbers
{
    public static int $number = 50;
    public static function sum(int $a, int $b): int
    {
        return $a + $b;
    }

    public static function sub(int $a, int $b): int
    {
        return $a - $b;
    }

    public static function super(int $a, int $b)
    {
        $sum = self::sum($a, $b);
        $sub = self::sub($a, $b);

        return $sum + $sub + self::$number;
    }
}

echo Numbers::sum(10, 15) . PHP_EOL;
echo Numbers::sub(10, 15) . PHP_EOL;
echo Numbers::$number . PHP_EOL;

Numbers::$number++;
echo Numbers::$number . PHP_EOL;

echo Numbers::super(10, 10) . PHP_EOL;