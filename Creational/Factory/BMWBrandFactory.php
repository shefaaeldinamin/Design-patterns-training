<?php

namespace Creational\Factory;

class BMWBrandFactory implements BrandFactory
{
 public function buildBrand()
 {
     return new BMWCar();
 }
}
