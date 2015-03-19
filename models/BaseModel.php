<?php
use Respect\Validation\Validator as v;

class BaseModel extends Illuminate\Database\Eloquent\Model{

  public function validate($data){
    $validate = new stdClass();
    try{
      $this->getValidator()->assert($data);
    } catch (\InvalidArgumentException $e) {
      $validate->errors = $e->findMessages($this->getErrorMessages());
    }

    $validate->pass =  $this->getValidator()->validate($data);
    return $validate;
  }

}
