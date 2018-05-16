<?php
require('app/Models/UserModel.php');
require('app/Calculater/Additional.php');
require('app/Calculater/Exceptions/NoOperandsException.php');

use App\Models\UserModel as User;
use App\Calculater\Additional as Additional;


$person_1 = new User();

$person_1->setLastName('Artem');

$person_1->setFirstName('Rogov');

$person_1->setEmailAddress('artemrogov281@gmail.com');

echo $person_1->getFullName();

echo "\n";

/* test Additionale class */

$test1 = new Additional;

$test1->setOperands([]);

echo $test1->calculate();
