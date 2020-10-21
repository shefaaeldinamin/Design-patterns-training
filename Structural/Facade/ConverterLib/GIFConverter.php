<?php

namespace Structural\Facade\ConverterLib;

class GIFConverter
{
    private $animator;

    public function __construct(Animator $animator)
    {
        $this->animator = $animator;
    }
   public function convertToGIF(Photo $photo){
       $photo->setType($photo->getType().'.GIF');
       $this->animator->animatePhoto($photo);
       return $photo;
   }
}
