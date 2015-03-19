<?php
class UserService
{
   protected $User;
   protected $app;

   public function __construct($app) {
      $this->app = $app ;
   }

   public function find($id) {
   }

   public function all() {
     $User = $app->User;
     return $User::all();
   }

   public function register($user) {
    $newUser = new User($user);
    $validate = $newUser->validate($user);
    if($validate->pass){
      return $newUser.save();
    }else{
      return $validate;
    }

   }

   public function count() {
   }
}
