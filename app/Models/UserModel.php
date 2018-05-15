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

public function setFirstName($name){


  $this->_name = $name;


}
public function setLastName($param){

  $this->_lastname = $param;


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

}
