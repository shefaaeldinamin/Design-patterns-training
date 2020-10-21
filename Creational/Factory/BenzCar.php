<?php

namespace Creational\Factory;

class BenzCar implements CarBrandInterface
{
 public function createBrand()
 {
     return "Benz Brand";
 }
}
