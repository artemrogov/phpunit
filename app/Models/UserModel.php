<?php
namespace App\Models;

/**
 *Класс пользователя
 *Ввод/вывод имени и фамилии
 */
class UserModel
{


private $_name;


private $_lastname;

private $_email;


public function setFirstName($name){


  $this->_name = trim($name);


}
public function setLastName($param){

  $this->_lastname = trim($param);


}

public function getFirstName(){

  return $this->_name;


}
public function getLastName(){


  return $this->_lastname;


}
public function getFullName(){

  return $this->_name .' '. $this->_lastname;
}
public function setEmailAddress($email)
{

  $this->_email = $email;

}
public function getEmailAddress(){

  return $this->_email;

}
public function getEmailVariables(){

  return [
      'full_name'=>$this->getFullName(),
      'email'=>$this->getEmailAddress(),

  ];
}
}
