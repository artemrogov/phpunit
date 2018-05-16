<?php

use PHPUnit\Framework\TestCase;
use \App\Calculater\Additional;

class AdditionalTest extends TestCase {


    /** @test */
    public function adds_up_given_operands(){
      /*
      *добавляет заданные операнды
      */
        $addition = new Additional;

        $addition->setOperands([5,10]);

        $this->assertEquals(15, $addition->calculate());

    }
    /** @test */
    public function no_operands_additional_exceptions(){

      $this->expectException(\App\Calculater\Exceptions\NoOperandsException::class);

      $addition = new Additional;

      $addition->calculate();
      
    }



}
