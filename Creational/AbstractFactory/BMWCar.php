<?php

namespace Creational\AbstractFactory;

class BMWCar implements CarInterface
{
    private $price;

    public function __construct($price)
    {
        $this->price = $price;
    }

    public function calculatePrice()
    {
        $price = $this->price + 1200000;
        return $price;
    }
}
