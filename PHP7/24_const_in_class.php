<?php
class Goodbye{
  const SMS="thank you and goodbye <br>";
  const SMS_1="take care";
  public function byebye(){
    echo self::SMS;
  }
}
$goodbye= new Goodbye();
$goodbye->byebye();
echo $goodbye::SMS_1;

 ?>
