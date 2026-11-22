<?php

require_once "DataClass/animal.php";

use data\{animal, cat, dog};

$cat = new cat();
$cat->name = "Luna";
$cat->run();

$dog = new dog();
$dog->name = "Doggy";
$dog->run();