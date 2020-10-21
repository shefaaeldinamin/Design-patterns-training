<?php

namespace Structural\Adapter;

use Structural\Adapter\EngineInterface;

class EngineAdapter implements EngineInterface
{
    private $engine;

    public function __construct(Turbo $turbo)
    {
        $this->engine = $turbo;
    }

    public function startEngine()
    {
        return $this->engine->startTurbo();
    }
}
