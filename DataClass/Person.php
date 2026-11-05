<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Person
{
    var string $name;
    var ?string $addres = null;
    var string $country = "Indonesia";

}

//untuk menentukan tipe data dalam properties nya tambahkan setelah kata kunci var