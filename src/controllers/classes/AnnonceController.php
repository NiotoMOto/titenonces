<?php

class AnnonceController extends Controller
{

  public function init(\Slim\Slim $app) {
     $this->service = $app->AnnonceService;
     $this->app = $app;
     $this->Annonce = $app->Annonce;
  }


  public function create($request) {
    $validate = $this->service->create($request->params())->validate;
    if($validate->pass){
      $this->app->redirect($this->app->urlFor('createAnnonce'));
    }else{
      $this->app->render('createAnnonce.php',array("errors"=> $validate->errors, "annonce" => $request->params()));
    }
  }


}
