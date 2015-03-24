<?php
require 'BaseModel.php';

foreach (glob(ROOT . 'src' . DS . 'models/classes/'.'*.php') as $filename)
{
  require_once $filename;
  $model = basename($filename, '.php') ;
  $app->container->$model = $model;
}
