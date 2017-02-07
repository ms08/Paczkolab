<?php



include 'config/connect.php';
//pobieramy plik - podlacza sie do PDO przekazuje te polaczenie do klasy w formie statycznego atrybutu

// var_dump($_SERVER['REQUEST_METHOD']);
// var_dump($_SERVER['REQUEST_URI']);

//deklaracja zmiennych
$request = ' ';
$arrayRequest=[];
$requestClass=' ';




//parsowanie zapytania
$request = $_SERVER['REQUEST_URI'];

$arrayRequest= explode('/', $request);


if(isset($arrayRequest[4]))
  {
    $requestClass=$arrayRequest[4];
  }
  else
  {
    echo "nie podałeś nazwy klasy";
    die();
  }

var_dump($requestClass);

if($_SERVER['REQUEST_METHOD']=='GET')
{
  if($_SERVER['REQUEST_URI']=='/kurs/Nadawanie%20Paczek/router.php/User.php')
  {

  }
  else
  {

  }
}



// do domu testy setterow i getterow napisac funkcje ktora przetestuje klase user
// utworzyc prawidlowe polaczenie z baza
// dopisac analogiczne klasy dla adresu paczki i rozmiaru NIE ROBIMY RELACJI
 ?>
