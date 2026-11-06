<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "DataClass/Person.php";

$Aufa = new Person();
$Aufa ->name = "Aufa";
$Aufa->sayHello("Aufa");

$Nino = new Person();
$Nino ->name = "Nino";
$Nino->sayHello("Nino");

