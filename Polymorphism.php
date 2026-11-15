<?php

require_once "DataClass/Programmer.php";

$company = new Company();
$company->programmer = new programmer("Aufa");

var_dump($company);

$company = new Company();
$company->programmer = new BackendProgrammer("Nino");
var_dump($company);

$company = new Company();
$company->programmer = new FrontendProgrammer("Eko");
var_dump($company);

sayHelloProgrammer(new programmer ("Aufa"));

sayHelloProgrammer(new FrontendProgrammer ("Nino"));

sayHelloProgrammer(new BackendProgrammer ("Eko"));



