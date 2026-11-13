<?php
class product
{
    protected string $name;
    protected string $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
public function getname(): string
 {
  return $this->name;
 }

  public function getprice(): string
 {
  return $this->price;
 }
}

class ProductDummy extends product
{
   public function info()
   {
    echo " name  $this->name" . PHP_EOL;  // tidak bisa di run karena private
    echo " price  $this->price" . PHP_EOL; //bisa di run namun terbatas hanya bersifat class dan sub class
   }
}
