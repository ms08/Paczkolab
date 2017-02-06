<?php
include '../class/Adress.php';

$address1 = new Address;
$address1->setcity('warszawa');
$address1->setzipCode(333);
$address1->setstreet('michalszeksw');
$address1->setapartmentNumber(34);

var_dump($address1);
