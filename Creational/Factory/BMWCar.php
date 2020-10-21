<?php

namespace Creational\Factory;

class BMWCar implements CarBrandInterface
{
 public function createBrand()
 {
     return "BMW Brand";
 }
}
