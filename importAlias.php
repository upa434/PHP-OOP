<?php
require_once "DataClass/conflict.php";
require_once "DataClass/helper.php";

use data\One\conflict as conflict1;
use data\Two\conflict as conflict2;
use function helper\helpme as help;
use const helper\APPLICATION as APP;

$conflict1 = new conflict1();
$conflict2 = new conflict2();

help();

echo APP . PHP_EOL; 