<?php

class HomeController extends Controller{

  public function init(\Slim\Slim $app) {
     $this->app = $app;
  }

  public function home(){
    $AnnoncesService = $this->$app->AnnonceService;
    $annonces = $AnnoncesService.getAll();
    $thi->$app->render('home.php', array('annonces'=>$annonces));
  }

}
