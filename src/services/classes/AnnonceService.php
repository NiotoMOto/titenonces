<?php
class AnnonceService
{
  protected $app;

  public function __construct($app) {
     $this->app = $app ;
  }

  public function all() {
    $Annonce = $app->Annonce;
    return $Annonce::all();
  }

  public function create($annonce) {
   $newAnnonce = new Annonce($annonce);
   $validate = $newAnnonce->validate($annonce);
   $result = new stdClass();
   $result->validate =  $validate;
   if($validate->pass){
     $result->data = $newAnnonce->save();
   }
   return $result;
  }
}
