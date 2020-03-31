<?php
abstract class Car{
  public $name;
  public function __construct($name){
    $this->name=$name;
  }
  abstract public function intro();
}
class Audi extends Car{
  public function intro(){
    echo "Choose German quality! I'm an $this->name!<br>";
  }
}
class Volvo extends Car{
  public function intro(){
    echo "Proud to be Swedish! I'm a $this->name!<br>";
  }
}
class Citroen extends Car{
  public function intro(){
    echo "French extravagance! I'm a $this->name!<br>";
  }
}
$audi = new Audi("Audi");
$audi->intro();

$volvo = new Volvo("Volvo");
$volvo->intro();

$citroen  = new Citroen("Citroen");
$citroen->intro();
 ?>
