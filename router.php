<?php



include 'config/connect.php';
//pobieramy plik - podlacza sie do PDO przekazuje te polaczenie do klasy w formie statycznego atrybutu

// var_dump($_SERVER['REQUEST_METHOD']);
// var_dump($_SERVER['REQUEST_URI']);

//deklaracja zmiennych
$request = ' ';
$arrayRequest=[];
$requestClass=' ';
$requestParam=null;



//parsowanie zapytania
$request = $_SERVER['REQUEST_URI'];

$arrayRequest= explode('/', $request);




if (isset($arrayRequest[4]))
{
  $requestClass=$arrayRequest[4];
}
else {
  echo "nie podales nazwy klasy";
}


if(isset($arrayRequest[5]))
  {
    $requestParam = intval($arrayRequest[5]);
  }
  else
  {
    echo "nie podałeś parametru";

  }


  // $requestParam = intval($arrayRequest[5]);
  // $requestParam = $arrayRequest[3];


// pobieram parametr pod ktorym jest id
// var_dump($arrayRequest);
// var_dump($requestParam);



// var_dump($requestClass);



if($_SERVER['REQUEST_METHOD']=='GET')
{
  if($requestClass=='user')
  {
    // poszukac lepszego rozwiazania
    if($requestParam>0)
    {
      // wyswietl wszystkich userow
      $oUser=new User();
      $userData = $oUser->loadFromDB($requestParam);
      // var_dump($userData);
    }
    if($requestParam == null)
    {
      $allUsers = User::loadAllFromDB();
      // var_dump($allUsers);
      print_r(json_encode($allUsers));
    }
    else
    {
      // wyswietl wszystkie
    }


  }
  else
  {
    echo "blad router.php";
  }
}
else {
  echo "blad322222";
}



// do domu testy setterow i getterow napisac funkcje ktora przetestuje klase user
// utworzyc prawidlowe polaczenie z baza
// dopisac analogiczne klasy dla adresu paczki i rozmiaru NIE ROBIMY RELACJI
 ?>
