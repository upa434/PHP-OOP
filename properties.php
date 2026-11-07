<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "DataClass/Person.php";

$person = new Person("Aufa", "Pekanbaru");
$person->name = "Aufa";
$person->addres = "Pekanbaru";
$person->country = "Indonesia";



echo "name : $person->name" . PHP_EOL;
echo "addres : $person->addres" . PHP_EOL;
echo "country : $person->country" . PHP_EOL;


echo "\n" . PHP_EOL;

$person2 = new Person("Nino" , "Tokyo");
$person2->name = "Nino";
$person2->addres = "Tokyo";
$person2->country = "Japan";

echo "name : $person2->name" . PHP_EOL;
echo "addres : $person2->addres" . PHP_EOL;
echo "country : $person2->country" . PHP_EOL;

//error
//$person = [];