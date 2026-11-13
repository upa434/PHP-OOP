<?php
require_once "DataClass/product.php";


$product = new product("Apple", 5000);


echo $product->getname() . PHP_EOL;
echo $product->getprice() . PHP_EOL;;

$dummy = new ProductDummy("Apple", 5000);

$dummy->info();

//perlu di ubah ke public untuk memuncul kan variable name dan price