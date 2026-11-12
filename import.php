<?php
require_once "DataClass/conflict.php";
require_once "DataClass/helper.php";

use data\One\conflict;
use function helper\helpme;
use const helper\APPLICATION;

$conflict1 = new conflict();
$conflict2 = new data\Two\conflict();

helpme();

echo APPLICATION . PHP_EOL; 