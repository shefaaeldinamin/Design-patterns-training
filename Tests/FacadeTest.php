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
use Structural\Facade\ConverterFacade;
use Structural\Facade\ConverterLib\Photo;

require '/home/shefaaeldin/Public/Training/DesignPatternsCourse/vendor/autoload.php';

class FacadeTest extends  TestCase
{
    private $facade;

    public function setUp()
    {
      $this->facade = new ConverterFacade();
    }

    public  function testCanConvertToGIF()
    {
       $photo = new Photo();
       $this->facade->GIFConvert($photo);

       $this->assertEquals('.GIF',$photo->getType());
    }

    public  function testCanConvertToJPG()
    {
       $photo = new Photo();
       $this->facade->JPGConvert($photo);
       $this->assertEquals('.JPG',$photo->getType());
    }
}