<?php

/*interface CanPutInWarehouseInterface {
    public function getName(): string;
}

interface GunInterface {
    public function getAmmo(): int;
}

interface ExplosionInterface {
    public function explode(): string;
}

class Pistol implements CanPutInWarehouseInterface, GunInterface {

    public function getName(): string
    {
        return 'Pistol';
    }

    public function getAmmo(): int
    {
        return 1345;
    }
}

class Shotgun implements CanPutInWarehouseInterface, GunInterface {

    public function getName(): string
    {
        return 'Shotgun';
    }

    public function getAmmo(): int
    {
        return 136;
    }
}

class C4 implements CanPutInWarehouseInterface, ExplosionInterface {

    public function getName(): string
    {
        return 'C4 Bomb';
    }

    public function explode(): string
    {
        return 'exploded';
    }
}

class AtomBmb implements CanPutInWarehouseInterface, ExplosionInterface {

    public function getName(): string
    {
        return 'Atom bomb';
    }

    public function explode(): string
    {
        return 'exploded';
    }
}

Class WeaponCollection {
    public array $items = [];
    public function add(CanPutInWarehouseInterface $item): void {
        $this->items[] = $item;
    }
    public function all(): array {
        return $this->items;
    }
}

$weaponCollection = new WeaponCollection();
$weaponCollection->add(new Pistol());
$weaponCollection->add(new Shotgun());
$weaponCollection->add(new C4());
$weaponCollection->add(new AtomBmb());

foreach ($weaponCollection->all() as $item) {
    if($item instanceof GunInterface) {
        echo 'Weapon: ' . $item->getName() . ' Ammo count: ' . $item->getAmmo() . ' bullets' . PHP_EOL;
    } elseif ($item instanceof ExplosionInterface) {
        echo 'Weapon: ' . $item->getName()  . ' ' . $item->explode() . PHP_EOL;
    }
}