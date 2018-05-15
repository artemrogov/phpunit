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


}
