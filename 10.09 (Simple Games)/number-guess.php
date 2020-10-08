<?php

//$pcNumber = (int) rand(1, 100);
//echo $pcNumber . PHP_EOL;
//$playersChoice = 0;
//
//while($pcNumber !== $playersChoice) {
//    $playersChoice = (int) readline("Please enter your number: ");
//    if ($playersChoice === $pcNumber) {
//        echo "Yes, it's $pcNumber" . PHP_EOL;
//    } elseif ($playersChoice > $pcNumber) {
//        echo "No, my number is smallest" . PHP_EOL;
//    } elseif ($playersChoice < $pcNumber) {
//        echo "No, my number is largest" . PHP_EOL;
//    }
//}

$pcNumber = (int) rand(1, 100);
$pcChoice = 0;
$min = 1;
$max = 100;

echo $pcNumber . PHP_EOL;
$countOfAttempts = (int) readline("Please enter count of attempts: ");

while($pcNumber !== $pcChoice && $countOfAttempts !== 0) {
    $pcChoice = (int) rand($min, $max);
    if ($pcChoice === $pcNumber) {
        echo "Yes, it's $pcNumber" . PHP_EOL;
    } elseif ($pcChoice > $pcNumber) {
        echo "No, players number is smallest" . PHP_EOL;
        $max = $pcChoice - 1;
    } elseif ($pcChoice < $pcNumber) {
        echo "No, players number is largest" . PHP_EOL;
        $min = $pcChoice + 1;
    }
    $countOfAttempts--;
}
