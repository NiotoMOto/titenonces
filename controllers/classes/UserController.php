<?php

class UserController extends Controller
{
   public function init(Pimple\Container $di) {
      $this->service = $di['UserService'];
   }

   public function register($user) {
     var_dump($user);
   }

   public function login($user) {
     var_dump($user);
   }

   public function find($id) {
      //$this->app->render('user.php', array('user' => $this->service->find($id)));
      echo 'Found the user with id = ' . $id . '';
      var_dump($this->service->find($id));
   }

   public function all() {
      //$this->app->render('users.php', array('users' => $this->service->all()));
      echo 'Found all users';
      var_dump($this->service->all());
   }
}
