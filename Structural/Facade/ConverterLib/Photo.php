<?php

namespace Structural\Facade\ConverterLib;

class Photo
{
    private $type;

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function __toString()
    {
        return $this->type;
    }
}
