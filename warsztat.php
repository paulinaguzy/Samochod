<?php

include_once ('samochod.php');

//$samochod = new Samochod();
//echo $samochod->helloSamochod();

$mojSamochod = new Samochod("Toyota", "Yaris", "perłowy", "hatchback");
echo $mojSamochod->helloSamochod();

$innySamochod = new Samochod("Toyota", "Corolla", "czarny", "hatchback");
echo $innySamochod->helloSamochod();

echo $innySamochod->getKolor()."\n";
$innySamochod->setKolor("srebrny");
echo $innySamochod->getKolor()."\n";

echo $mojSamochod->helloSamochod();
echo $innySamochod->helloSamochod();

$s = new Samochod("Ford", "Fiesta", "niebieski", "hatchback");
echo $s->otoSamochod();

?>
