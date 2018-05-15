<?php
require('app/Models/UserModel.php');


use App\Models\UserModel as User;

$person_1 = new User();

$person_1->setLastName('Artem');

$person_1->setFirstName('Rogov');

$person_1->setEmailAddress('artemrogov281@gmail.com');

echo $person_1->getFullName();
