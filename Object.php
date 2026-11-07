<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "DataClass/Person.php";

$person = new Person("Aufa", "Pekanbaru");

var_dump($person);