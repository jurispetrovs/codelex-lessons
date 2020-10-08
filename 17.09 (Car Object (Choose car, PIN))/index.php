<?php

class Auto {
    protected string $brand;
    protected string $plateNumber;
    protected int $tank;
    protected int $pinCode;
    public function __construct(string $brand, string $plateNumber, int $tank, int $pinCode) {
        $this->brand = $brand;
        $this->plateNumber = $plateNumber;
        $this->tank = $tank;
        $this->pinCode = $pinCode;
    }
    public function getBrand(): string
    {
        return $this->brand;
    }
    public function getPlateNumber(): string
    {
        return $this->plateNumber;
    }
    public function getTank(): int
    {
        return $this->tank;
    }
    public function getPinCode(): int
    {
        return $this->pinCode;
    }
}

$carList = [
    new Auto("BMW", "HZ1234", 90, 147),
    new Auto("Audi", "VR4578", 70, 258),
    new Auto("Mercedes", "EB6723", 80, 369)
];

$carIndex = 0;
foreach ($carList as $car) {
    echo  "[" . ($carIndex+= 1) . "]" . $car->getBrand() . PHP_EOL;
}
$usersChoice = readline("Please choose the car [1-3]: ");
$attempts = 3;
$carIsStarted = false;

while ($attempts != 0) {
    $userPin = (int) readline("Please insert cars PIN code to start it: ");
    if($userPin === $carList[$usersChoice - 1]->getPinCode()) {
        $carIsStarted = true;
        break;
    } else {
        echo "Sorry, try again !" . PHP_EOL;
    }
    $attempts--;
}

if ($carIsStarted = true) {
    $fuelConsumption = 10; // 10 liters per 100 km
    $fuel = $carList[$usersChoice - 1]->getTank();
    $mileage = 0;

    while($fuel >= 0) {
        echo "{$carList[$usersChoice - 1]->getBrand()} {$carList[$usersChoice - 1]->getPlateNumber()} $fuel $mileage" . PHP_EOL;
        $fuel -= $fuelConsumption / 10;
        $mileage += 10;
        sleep(1);
    }
}