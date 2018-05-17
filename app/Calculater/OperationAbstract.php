<?php
namespace App\Calculater;

abstract class OperationAbstract {

  protected $operations = [];


  public function setOperation(array $operations){

      $this->operations = $operations;

  }


}
