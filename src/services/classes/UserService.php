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
    $result = new stdClass();
    $result->validate =  $validate;
    if($validate->pass){
      $result->data = $newUser->save();
    }
    return $result;
   }

   public function login($user) {
     $_SESSION['loginError'] = false;
     $User = $this->app->User;
     $userResult = $User::where('mail','=', $user['mail'])->first();
     if ($userResult) {
       var_dump(crypt($user['password'], $userResult->password) == $userResult->password);
       if(crypt($user['password'], $userResult->password) == $userResult->password){
         $_SESSION['user'] = $userResult;
         return true;
       }else{
         return false;
       }
    }
   }


}
