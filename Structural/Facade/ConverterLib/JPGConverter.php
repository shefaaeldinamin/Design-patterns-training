<?php

namespace Structural\Facade\ConverterLib;

class JPGConverter
{
   public function convertToJPG(Photo $photo){
       $photo->setType('.JPG');
       return $photo;
   }
}
