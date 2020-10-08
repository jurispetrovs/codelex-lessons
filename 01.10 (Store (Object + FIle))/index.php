<?php

declare(strict_types=1);

require_once 'Product.php';
require_once 'Store.php';
require_once 'ProductFormatter.php';
require_once 'ProductStorage.php';
require_once 'Person.php';

//$person = new Person('Janis', 1000);
$storage = new ProductStorage('./products.txt');
$store = new Store('Narvesen Purvciems', $storage->load());

/*$mego = new Store('MEGO', [
    new Product('Rupjmaize', 100, 5),
]);*/

/*echo $person->getName() . ' ' . ProductFormatter::price($person->getMoney());
echo PHP_EOL;
echo PHP_EOL;*/

foreach ($store->getAllProducts() as $product)
{
    /** @var Product $product */
    echo $product->getName() . ' ';
    echo ProductFormatter::price($product->getPrice()) . ' ';
    echo ProductFormatter::amount($product->getAmount()) . ' ';
    echo PHP_EOL;
}