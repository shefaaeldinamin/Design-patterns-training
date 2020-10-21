<?php

namespace Structural\Adapter;

use Structural\Adapter\EngineInterface;

class Engine implements EngineInterface
{
    public function startEngine()
    {
        return "Normal engine";
    }
}
