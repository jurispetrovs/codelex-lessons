<?php

$playerEggs = (int) readline("Please enter count of players eggs: ");
echo PHP_EOL;
$pcEggs = (int) readline("Please enter count of PC eggs: ");


$gameNumber = 1;
$drawCount = 0;
$winCount = 0;
$loseCount = 0;

while ($playerEggs > 0 && $pcEggs > 0) {
    $playerNumber = rand(1, 100);
    $computerNumber = rand(1, 100);

    if ($playerNumber === $computerNumber) {
        echo "DRAW" . PHP_EOL;
    } elseif ($playerNumber > $computerNumber) {
        $winCount++;
        $pcEggs--;
        echo "WIN". PHP_EOL;
    } elseif ($playerNumber < $computerNumber) {
        $loseCount++;
        $playerEggs--;
        echo "LOSE" . PHP_EOL;
    }
    $gameNumber++;
}

echo "WON: $winCount / Lose: $loseCount / DRAW: $drawCount";