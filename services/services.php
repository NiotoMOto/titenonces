<?php
foreach (glob("services/classes/*.php") as $filename)
{
    require $filename;
    $className = basename($filename, '.php') ;

    $app->container->singleton($className, function ()use ($className, $app) {
      return new $className($app);
    });

}
