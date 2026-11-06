<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once "DataClass/Person.php";
define ("APPLICATION" , "Belajar php OOP");
const APP_VERSION = "1.0.0";

echo  APPLICATION . PHP_EOL;
echo "APP_VERSION" . PHP_EOL;

echo Person::AUTHOR . PHP_EOL;