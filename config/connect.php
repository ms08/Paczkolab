<?php
  require 'Class/User.php';

  $host = "localhost";
  $user = "root";
  $password = "root";
  $db   = "PACZKOMAT";

  $connection = new PDO("mysql:host=$host; charset=UTF8; dbname=$db", $user, $password);
  //fake to delete now
  // $connection ='fakeconnection';
  // przekazuje stringa aby sprawdzic czy dziala
  User::$connection = $connection;
  var_dump($connection);

 ?>
