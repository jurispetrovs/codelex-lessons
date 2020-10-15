<?php

require_once 'vendor/autoload.php';

use Carbon\Carbon;

echo Carbon::now()->format('Y/m/d') . PHP_EOL;

$now = Carbon::now();

echo $now->addWeeks(2)->addDay()->diffForHumans() . PHP_EOL;

///////////////////////

use Faker\Factory;

$faker = Factory::create();

echo $faker->name . PHP_EOL;

///////////////////////

use App\Person;

$person = new Person();

echo $person->bornAt() . PHP_EOL;