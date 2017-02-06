<?php
include 'config/connect.php';
//pobieramy plik - podlacza sie do PDO przekazuje te polaczenie do klasy w formie statycznego atrybutu

var_dump($_SERVER['REQUEST_METHOD']);
var_dump($_SERVER['REQUEST_URI']);

if($_SERVER['REQUEST_METHOD']=='GET')
{
  if($_SERVER['REQUEST_URI']=='/kurs/Nadawanie%20Paczek/router.php/user/')
  {
    $newUser = new User();
  }
  else
  {
    echo "nie chodzi o usera";
  }
}

 ?>
