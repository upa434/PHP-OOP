<?php
namespace
{
require_once "DataClass/conflict.php";
require_once "DataClass/helper.php";
$conflict1 = new data\One\conflict();
$conflict2 = new data\Two\conflict();

echo helper\APPLICATION . PHP_EOL;

helper\helpme();
}