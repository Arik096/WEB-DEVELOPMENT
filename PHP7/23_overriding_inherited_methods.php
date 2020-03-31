<?php
class Fruit{
  public $name, $color;
  public function __construct($name,$color){
    $this->name=$name;
    $this->color=$color;
  }
  public function intro(){
    echo "The fruit is $this->name and the color is $this->color.<br>";
  }
}
class Berry extends Fruit{
  public $weight;
  public function __construct($name,$color,$weight){
  $this->name=$name;
  $this->color=$color;
  $this->weight=$weight;
  }
  public function intro() {
  echo "The fruit is $this->name, the color is $this->color, and the weight is $this->weight gram.<br>";
  }
}
$strawberry =new Berry("Strawberry","Red","100");
$strawberry->intro();
 ?>


// use final keyword before class keyword to prevent class inheritence

// use final keyword before function keyword to prevent the method overridding
