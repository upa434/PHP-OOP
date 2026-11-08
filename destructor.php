<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "DataClass/Person.php";

$Aufa = new person("Aufa", "Pekanbaru");
$Nino = new person("Nino", "Tokyo");

echo "Program selesai" . PHP_EOL;