<?php

namespace App\Calculater;


use \App\Calculater\Exceptions\NoOperandsException;
use App\OperationAbstract;

class Devision extends DevisionAbstract {

  protected $operands = [];

  public function setOperands(array $operands){

      $this->operands = $operands;

  }

  public function calculate(){


    if (count($this->operands) === 0){

      throw new NoOperandsException('Error no values!!');

    }

      $result = 0;

      foreach($this->operands as $index =>$operand){

        if($index === 0){

          $result = $operand;

          continue;
        }
        $result = $result / $operand;

      }

      return array_reduce($this->operands, function($a, $b){

        if ($a !== null && $b !=null){

          return $a/$b;
        }

        return $b;

      },null);

  }

}
