<?php

use Respect\Validation\Validator as v;

class Annonce extends BaseModel {
  protected $fillable = array('content', 'title','price');

  public function getValidator(){
    return  v::key('title', v::string()->notEmpty())
             ->key('content', v::string()->notEmpty())
             ->key('price', v::string()->notEmpty());
  }

  public function getErrorMessages(){
    return  [
             'title'=> 'le {{name}} est obligatoire',
             'mail' => 'le {{name}} n\'est pas valide',
             'price' => 'le {{name}} n\'est pas valide'
            ];
  }

}
