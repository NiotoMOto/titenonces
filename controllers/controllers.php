<?php

require 'Controller.php';

foreach (glob("controllers/classes/*.php") as $filename)
{
    require $filename;
    $className = basename($filename, '.php') ;
    var_dump($className);
    $pimple[$className] = function ($pimple) use ($className){
        return new $className($pimple);
    };
}
