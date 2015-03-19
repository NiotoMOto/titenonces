<?php
require 'BaseModel.php';

foreach (glob("models/classes/*.php") as $filename)
{
  require $filename;
  $model = basename($filename, '.php') ;
  $app->container->$model = $model;
}
