<?php

require_once "DataClass/category.php";

$category = new category();
$category->setName("Handphone");
$category->setExpensive(true);

$category->setName("");

echo "Name : {$category->getName()}" . PHP_EOL;
echo "Expensive : {$category->isExpensive()}" . PHP_EOL;

