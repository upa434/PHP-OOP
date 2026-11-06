<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Person
{
    const AUTHOR = "AUFANUR";
    var ?string $name;
    var ?string $addres = null;
    var ?string $country = "Indonesia";

    function sayHello(?string $name)
    {
if(is_null($name)){
    echo "Hi,My name is  $this->name " . PHP_EOL;
}else{
    echo  "Hi $name,My name is  $this->name" . PHP_EOL;
}
       
    }
}

//untuk menentukan tipe data dalam properties nya tambahkan setelah kata kunci var