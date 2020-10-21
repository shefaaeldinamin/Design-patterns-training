<?php

namespace Creational\Factory;

class BenzBrandFactory implements BrandFactory
{
 public function buildBrand()
 {
     return new BenzCar();
 }
}
