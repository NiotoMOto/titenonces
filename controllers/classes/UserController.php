<?php

class UserController extends Controller
{
   public function init(\Slim\Slim $app) {
      $this->service = $app->UserService;
      $this->app = $app;
      $this->User = $app->User;
   }

   public function register($request) {
     $validate = $this->service->register($request->params())->validate;
     if($validate->pass){
       $this->app->redirect($this->app->urlFor('login'));
     }else{
       $this->app->render('register.php',array("errors"=> $validate->errors, "user" => $request->params()));
     }
   }

   public function login($request) {
     $user = $request->params();
     if(isset($user['password']) && isset($user['mail'])){
       $result = $this->service->login($user);
       if($result){
         $this->app->redirect($this->app->urlFor('home'));
       }else{
         $this->app->redirect($this->app->urlFor('login'));
       }
     }else{
      // $this->app->redirect($this->app->urlFor('login'));
     }
   }

   public function logout() {
     session_unset();
     $this->app->redirect($this->app->urlFor('home'));
   }

}
