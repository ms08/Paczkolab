<?php
include '../class/User.php';


$user1 = new User();
var_dump($user1);
$user2 = new User;
$user2->setName('marcin');
$user2->setHashedPassword('sddsfsdf');
var_dump($user2);

echo $user2->getName();

//sprawdzamy czy pobralo z usera

if($user2 instanceof User)
{
  echo "instance of User";
}
else {
  echo "instance is not a user";
}

 ?>
