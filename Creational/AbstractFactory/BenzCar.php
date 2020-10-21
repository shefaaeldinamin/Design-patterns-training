<?php

namespace Creational\AbstractFactory;

class BenzCar implements CarInterface
{
    private $price,$tax;

    public function __construct($price,$tax)
    {
        $this->price = $price;
        $this->tax = $tax;
    }

    public function calculatePrice()
    {
        $price = $this->price + 1200000 + $this->tax;
        return $price;
    }
}
