<?php

require_once 'StorageInterface.php';
require_once 'NumberGenerator.php';
require_once 'NumberStorage.php';
require_once 'NullStorage.php';
require_once 'FileNumberStorage.php';

$numberStorage = new NumberStorage('./numbers.txt');
$nullStorage = new NullStorage();
$fileNumberStorage = new FileNumberStorage('./numbers_2.txt');

$numberGenerator = new NumberGenerator($numberStorage, 1, 1000); // $numberStorage to $nullStorage or $fileNumberStorage

$randomNumber = $numberGenerator->getNumber();
$allNumbers = $numberGenerator->getAllNumbers();

$numberGenerator->save();

echo "Number chain: " . implode(' ', $allNumbers) . PHP_EOL;
echo "New number: $randomNumber" . PHP_EOL;
echo "AVG: " . number_format($numberGenerator->getAvg(), 2) . PHP_EOL;