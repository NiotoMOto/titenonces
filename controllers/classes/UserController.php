<?php

class UserController extends Controller
{
   public function init(\Slim\Slim $app) {
      $this->service = $app->UserService;
      $this->app = $app;
      $this->User = $app->User;
   }

   public function register($request) {
     $validate = $this->service->register($request->params());
     if($validate->pass){
       $this->app->redirect($this->app->urlFor('login'),compact($validate->errors));
     }else{
       $this->app->render('register.php',array("errors"=> $validate->errors));
       var_dump($validate->errors);
     }
   }

   public function login($user) {
   }

   public function find($id) {
   }

   public function all() {
   }
}
