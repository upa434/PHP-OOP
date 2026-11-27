<?php
require_once "DataClass/SayGoodBye.php";
use traits\{Person, SayHello, SayGoodBye};
$person = new Person();
$person->goodBye("Nino");
$person->Hello("Aufa");

$person->name = "Aufa";
var_dump($person);
