<?php
include '../class/Size.php';


$size1 = new Size;
$size1->setSize('M');
$size1->setCredits(199);


echo $size1->getSize();
echo $size1->getCredits();



var_dump($size1);
