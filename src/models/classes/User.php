<?php
use Respect\Validation\Validator as v;

class User extends BaseModel {
  protected $fillable = array('pseudo', 'nom', 'prenom', 'mail', 'tel', 'password');

  public function getValidator(){
    return  v::key('nom', v::string()->notEmpty())
             ->key('mail', v::email()->notEmpty())
             ->key('password', v::string()->notEmpty()->length(5,20));
  }

  public function getErrorMessages(){
    return  [
             'nom'=> 'le {{name}} est obligatoire',
             'mail' => 'le {{name}} n\'est pas valide',
             'password' => 'le {{name}} n\'est pas valide'
            ];
  }

  public function setPasswordAttribute($value){
    $this->attributes['password'] =User::generateHash($value);
  }

  public static function generateHash($password) {
    if (defined("CRYPT_BLOWFISH") && CRYPT_BLOWFISH) {
        $salt = '$2y$11$' . substr(md5(uniqid(rand(), true)), 0, 22);
        return crypt($password, $salt);
    }
  }
}
