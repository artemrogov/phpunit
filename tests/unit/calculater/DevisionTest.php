<?php
use PHPUnit\Framework\TestCase;

class DevisionTest extends TestCase {

/** @test */
  public function divides_given_operands(){

      $devision = new \App\Calculater\Devision;

      $devision->setOperands([100,2]);

      $this->assertEquals(50, $devision->calculate());

  }

}
