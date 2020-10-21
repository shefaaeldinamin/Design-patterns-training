<?php

namespace Structural\Facade\ConverterLib;

class ColorCorrection
{
   public function correctColor(Photo $photo){
       return $photo->getType().'color_correction';
   }
}
