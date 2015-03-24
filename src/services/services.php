<?php

foreach (glob(ROOT . 'src' . DS . 'services/classes/'.'*.php') as $filename)
{
    require_once $filename;
    $className = basename($filename, '.php') ;
    $app->container->singleton($className, function ()use ($className, $app) {
      return new $className($app);
    });

}
