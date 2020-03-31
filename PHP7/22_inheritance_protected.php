<?php
class Fruit{
  public $name;
  public $color;
  public function __construct($name,$color){
    $this->name=$name;
    $this->color=$color;
  }
  protected function intro(){
    echo "my name is $this->name and the color is $this->color<br>";
  }
}

class Berry extends Fruit{
  public function sms(){
    $this->intro();
    echo "am i really a fruit or a berry<br>";
  }
}

$strawberry = new Berry("Strawberry","Red");
$strawberry->sms();
 ?>
