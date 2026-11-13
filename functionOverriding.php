<?php

require_once "DataClass/maneger.php";

$maneger = new maneger();
$maneger->name = "Aufa";
$maneger->sayHello("Eko");

$VP = new VicePresident();
$VP->name = "Nino";
$VP->sayHello ("Eko");
