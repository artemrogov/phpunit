<?php
/**
  *Тестирование класса UserModel,
  *проверка соответствия ввода данных
  *фамилия + имя пользователя
*/
use PHPUnit\Framework\TestCase;
use App\Models\UserModel as User;

class UserTest extends TestCase {


protected $user;


  public function setUp(){

    $this->user = new User;

  }

          /** @test */
          public function that_we_can_get_the_first_name(){



                    $this->user->setFirstName('Artem');

                    $this->assertEquals($this->user->getFirstName(),'Artem');


          }
          public function testSetLastName(){



                    $this->user->setLastName('Rogov');

                    $this->assertEquals($this->user->getLastName(),'Rogov');


          }
          public function testFullNameReturn(){


                    $this->user->setFirstName('Rogov');

                    $this->user->setLastName('Artem');

                    $this->assertEquals($this->user->getFullName(),'Rogov Artem');

          }
          public function testFirstAndLastNameAreTrimmed(){


            $this->user->setFirstName('            Rogov  ');

            $this->user->setLastName('     Artem              ');
            $this->assertEquals($this->user->getFirstName(),'Rogov');
            $this->assertEquals($this->user->getLastName(),'Artem');

          }
          public function testSetEmailAddress(){

            $this->user->setEmailAddress('artemrogov@gmail.com');

            $this->assertEquals($this->user->getEmailAddress(), 'artemrogov@gmail.com');


          }
          public function testEmailAddressVariableCorrectly(){

              $this->user->setFirstName('Rogov');
              $this->user->setLastName('Artem');
              $this->user->setEmailAddress('artemrogov@gmail.com');

              $emailVariables = $this->user->getEmailVariables();

              $this->assertArrayHasKey('full_name',$emailVariables);

              $this->assertArrayHasKey('email',$emailVariables);

              $this->assertEquals($emailVariables['full_name'],'Rogov Artem');

              $this->assertEquals($emailVariables['email'],'artemrogov@gmail.com');


          }


}
