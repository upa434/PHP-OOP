<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "DataClass/maneger.php";

$maneger = new maneger();
$maneger->name = "Aufa";
$maneger->sayHello("Eko");


$Vp = new VicePresident();
$Vp->name = "Nino";
$Vp->sayHello("Eko");
