<?php
include '../class/Adress.php';

$address1 = new Address;
$address1->setcity('warszawa');
$address1->setzipCode(333);
$address1->setstreet('michalszeksw');
$address1->setapartmentNumber(34);



echo $address1->getcity();
echo $address1->getzipCode();
echo $address1->getstreet();
echo $address1->getapartmentNumber();

var_dump($address1);
