<?php

class Store
{
    private string $name;

    private array $products = [];

    public function __construct(string $name, array $products = [])
    {
        $this->name = $name;

        foreach ($products as $product) {
            $this->addProduct($product);
        }
    }

    public function addProduct(Product $product)
    {
        $this->products[] = $product;
    }

    public function getAllProducts()
    {
        return $this->products;
    }
}