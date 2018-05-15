<?php
/**
  *Тестирование класса UserModel,
  *проверка соответствия ввода данных
  *фамилия + имя пользователя
*/
use PHPUnit\Framework\TestCase;
use App\Models\UserModel as User;

class UserTest extends TestCase {

          public function testSetFirstName(){

                    $user = new User();

                    $user->setFirstName('Artem');

                    $this->assertEquals($user->getFirstName(),'Artem');


          }
          public function testSetLastName(){

                    $user = new User();

                    $user->setLastName('Rogov');

                    $this->assertEquals($user->getLastName(),'Rogov');


          }
          public function testFullNameReturn(){

                    $user = new User();

                    $user->setFirstName('Rogov');

                    $user->setLastName('Artem');

                    $this->assertEquals($user->getFullName(),'Rogov Artem');

          }
          public function testFirstAndLastNameAreTrimmed(){
            $user = new User();

            $user->setFirstName('            Rogov  ');

            $user->setLastName('     Artem              ');
            $this->assertEquals($user->getFirstName(),'Rogov');
            $this->assertEquals($user->getLastName(),'Artem');

          }
          public function testSetEmailAddress(){
            $user = new User();
            $user->setEmailAddress('artemrogov@gmail.com');

            $this->assertEquals($user->getEmailAddress(), 'artemrogov@gmail.com');


          }
          public function testEmailAddressVariableCorrectly(){
              $user = new User();
              $user->setFirstName('Rogov');
              $user->setLastName('Artem');
              $user->setEmailAddress('artemrogov@gmail.com');

              $emailVariables = $user->getEmailVariables();

              $this->assertArrayHasKey('full_name',$emailVariables);

              $this->assertArrayHasKey('email',$emailVariables);

              $this->assertEquals($emailVariables['full_name'],'Rogov Artem');

              $this->assertEquals($emailVariables['email'],'artemrogov@gmail.com');


          }


}
