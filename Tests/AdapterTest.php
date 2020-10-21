<?php


namespace Tests;


use Creational\AbstractFactory\BenzCar;
use Creational\AbstractFactory\BMWCar;
use Creational\AbstractFactory\CarAbstractFactory;
use PHPUnit\Framework\TestCase;
use Structural\Adapter\Car;
use Structural\Adapter\Engine;
use Structural\Adapter\EngineAdapter;
use Structural\Adapter\Turbo;

require '/home/shefaaeldin/Public/Training/DesignPatternsCourse/vendor/autoload.php';

class AdapterTest extends  TestCase
{

    public  function testCanStartNormalEngine()
    {
        $engine = new Engine();
        $car = new Car($engine);
        $this->assertEquals($car->start(),'Normal engine');
    }

    public  function testCanStartTurboEngine()
    {
        $turbo = new Turbo();
        $engine = new EngineAdapter($turbo);
        $car = new Car($engine);
        $this->assertEquals($car->start(),'Turbo engine');
    }
}