<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Person
{
    var ?string $name = "Aufa";
    var string $addres;
    var string $country;
}

//jika kosong pada properties maka akan mengikuti default pada class