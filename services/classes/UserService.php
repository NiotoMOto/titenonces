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
     var_dump($user);
     $User = $this->app->User;
     $userResult = $User::where('mail','=', $user['mail'])->first();
     if ($userResult) {
       var_dump(crypt($user['password'], $userResult->password) == $userResult->password);
       if(crypt($user['password'], $userResult->password) == $userResult->password){
         var_dump('AUTEHNTIFAITE',$user);
       }
       $_SESSION['user'] = $userResult;
       var_dump($_SESSION);
       return $userResult;
    }
   }


}
