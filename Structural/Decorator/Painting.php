<?php

namespace Structural\Decorator;

class Painting implements PaintingInterface
{
    private const COLOR = '-blank-';
    public function paint(Car $car)
    {
        $car->setColor(self::COLOR);
        return $car;
    }
}
