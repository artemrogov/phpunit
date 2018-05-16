<?php

namespace App\Calculater;

use \App\Calculater\Exceptions\NoOperandsException;

class Additional /*implements Operation */ {

  protected $operands = [];

  public function setOperands(array $operands){

      $this->operands = $operands;

  }

  public function calculate(){


    if (count($this->operands) === 0){
      throw new NoOperandsException('Error no values!!');
    }

      /*$result = 0;

      foreach($this->operands as $operand){

        $result += $operand;

      }

      return $result;*/

      try {

        return array_sum($this->operands);

      }catch(Exception $e){
        echo $e->getMessage();
      }


  }

}
