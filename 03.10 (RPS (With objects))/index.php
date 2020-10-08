<?php

require_once './Elements/AbstractElement.php';
require_once './Elements/ElementInterface.php';
require_once './Elements/Paper.php';
require_once './Elements/Rock.php';
require_once './Elements/Scissors.php';

require_once './Results/Result.php';
require_once './Results/LoseResult.php';
require_once './Results/WinResult.php';
require_once './Results/TieResult.php';

$collection = [
    new Paper(),
    New Rock(),
    new Scissors()
];

$paper = new Paper();
$rock = new Rock();
$scissors = new Scissors();

$result = $paper->beats($paper);
echo $result->getMessage();