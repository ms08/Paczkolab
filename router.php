<?php
include 'config/connect.php';
//pobieramy plik - podlacza sie do PDO przekazuje te polaczenie do klasy w formie statycznego atrybutu

var_dump($_SERVER['REQUEST_METHOD']);
var_dump($_SERVER['REQUEST_URI']);

if($_SERVER['REQUEST_METHOD']=='GET')
{
  if($_SERVER['REQUEST_URI']=='/kurs/Nadawanie%20Paczek/router.php/User.php')
  {
    $newUser = new User();
    echo "Chodzi o Usera";
  }
  else
  {
    echo "nie chodzi o usera";
  }
}



// do domu testy setterow i getterow napisac funkcje ktora przetestuje klase user
// utworzyc prawidlowe polaczenie z baza
// dopisac analogiczne klasy dla adresu paczki i rozmiaru NIE ROBIMY RELACJI
 ?>
