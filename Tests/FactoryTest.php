<?php


namespace Tests;


use Creational\AbstractFactory\BenzCar;
use Creational\AbstractFactory\BMWCar;
use Creational\AbstractFactory\CarAbstractFactory;
use Creational\Factory\BenzBrandFactory;
use Creational\Factory\BenzCar as FactoryBenzCar;
use Creational\Factory\BMWBrandFactory;
use Creational\Factory\BMWCar as FactoryBMWCar;
use PHPUnit\Framework\TestCase;

require '/home/shefaaeldin/Public/Training/DesignPatternsCourse/vendor/autoload.php';

class AbstraFactoryTestctFactoryTest extends  TestCase
{

    public  function testCanBuildBMWBrand()
    {
        $brandFactory = new BMWBrandFactory();
        $myBrand = $brandFactory->buildBrand();

        $this->assertInstanceOf(FactoryBMWCar::class,$myBrand);
    }
    public  function testCanBuildBenzBrand()
    {
        $brandFactory = new BenzBrandFactory();
        $myBrand = $brandFactory->buildBrand();

        $this->assertInstanceOf(FactoryBenzCar::class,$myBrand);
    }

}