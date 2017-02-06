<?php
include '../class/Parcel.php';


$parcel1 = new Parcel();
$parcel1->setuser('Janusz');
$parcel1->setsize('XL');


echo $parcel1->getuser();
echo $parcel1->getsize();




var_dump($parcel1);
