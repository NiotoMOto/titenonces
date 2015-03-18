<?php
abstract class Controller
{
   protected $app;
   protected $service;

   public function __construct(Pimple\Container $di) {
      $this->app = $di['app'];
      $this->init($di);
   }

   public abstract function init(Pimple\Container $di);
}
