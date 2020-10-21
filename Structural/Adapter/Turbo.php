<?php

namespace Structural\Adapter;

use Structural\Adapter\TurboInterface;

class Turbo implements TurboInterface
{
    public function startTurbo()
    {
        return "Turbo engine";
    }
}
