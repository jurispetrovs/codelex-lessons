<?php

$tank = (float) 70;
$drovenDistance = 0;
define('Fuel_per_100', 7.0);
define('Fuel_per_1', Fuel_per_100/100);

$distance = $tank/Fuel_per_100 * 100;

//echo "Car can drove $distance km distance" . PHP_EOL;

while ($tank >= 0) {
    echo "Now you have" . number_format($tank, 2) . " L fuel. And you drove $drovenDistance" . PHP_EOL;
    $tank -= Fuel_per_1;
    $drovenDistance +=1;
}
