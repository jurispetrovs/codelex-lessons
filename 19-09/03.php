<?php

abstract class Player {
    public abstract function getSpeed(): float;
    public function getName(): string {
        return get_class($this);
    }
}

class X extends Player {
    public function getSpeed(): float
    {
        return rand(90, 120);
    }
}

class O extends Player {
    public function getSpeed(): float
    {
        return rand(90, 120);
    }
}

class Track {
    private int $lenght;
    private string $symbol;
    private array $track;
    public function __construct(int $lenght, string $symbol = '_')
    {
        $this->lenght = $lenght;
        $this->symbol = $symbol;
        $this->track = array_fill(1, $this->lenght, $this->symbol);
    }
    public function drawTrack() {
        return implode(" ", $this->track);
    }
    public function getTrack(): array
    {
        return $this->track;
    }
}

/*Class Game {

}*/

$player1 = new X();
$player2 = new O();

$track1 = new Track(10);
$track2 = new Track(10);

$distance1 = 0;
$distance2 = 0;


$someOneWin = false;
while($someOneWin === false) {
    echo $player1->getName() . $track1->drawTrack() . $distance1 . PHP_EOL;
    echo $player2->getName() . $track2->drawTrack() . $distance2 . PHP_EOL;
    $distance1 += $player1->getSpeed();
    $distance2 += $player2->getSpeed();

    //if distance = distance from array


    if (floor($distance1 / 1000) == ) {

    }

    sleep(1);

}