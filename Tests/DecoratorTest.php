<?php


namespace Tests;

use PHPUnit\Framework\TestCase;
use Structural\Decorator\BlackPainitngDecorator;
use Structural\Decorator\BluePainitngDecorator;
use Structural\Decorator\Car;
use Structural\Decorator\Painting;

require '/home/shefaaeldin/Public/Training/DesignPatternsCourse/vendor/autoload.php';

class DecoratorTest extends  TestCase
{
   

    public  function testCanPaintBlankBlack()
    {
     $car = new Car();
     $painting = new Painting();
     $painting = new BlackPainitngDecorator($painting);
     $car = $painting->paint($car);
     $this->assertEquals($car->getColor(),"-black--blank-");

    }

    public  function testCanPaintBlankBlackBlue()
    {
     $car = new Car();
     $painting = new Painting();
     $painting = new BlackPainitngDecorator($painting);
     $painting = new BluePainitngDecorator($painting);
     $car = $painting->paint($car);
     $this->assertEquals($car->getColor(),"-blue--black--blank-");

    }

    
}