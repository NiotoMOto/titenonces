<?php
abstract class Controller
{
   protected $app;
   protected $service;

   public function __construct(\Slim\Slim $app) {
      $this->app = $app;
      $this->init($app);
   }

   public abstract function init(\Slim\Slim $app);
}
