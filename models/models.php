<?php
foreach (glob("models/classes/*.php") as $filename)
{
  require $filename;
  $className = basename($filename, '.php') ;
  $pimple[$className] = function ($pimple) use (&$className){
      return new $className($pimple);
  };
}
