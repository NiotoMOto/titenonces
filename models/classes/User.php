<?php
use Respect\Validation\Validator as v;

class User extends BaseModel {
  protected $fillable = array('pseudo', 'nom', 'prenom', 'mail', 'tel', 'password');

  public function getValidator(){
    return  v::key('nom', v::string()->notEmpty())
             ->key('mail', v::email()->notEmpty())
             ->key('password', v::email()->notEmpty()->length(5,20));
  }

  public function getErrorMessages(){
    return  [
             'nom'=> 'le {{name}} est obligatoire',
             'mail' => 'le {{name}} n\'est pas valide',
             'password' => 'le {{name}} n\'est pas valide'
            ];
  }
}
