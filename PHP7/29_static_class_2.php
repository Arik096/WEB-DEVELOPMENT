<?php
class welcome{
  public static function greet()
  {
    echo "bello,papito<br>";
  }
}
class bello{
  public function papito()
  {
    welcome::greet();
  }
}
class para extends welcome{
  public function domocha()
  {
    parent::greet();
  }
}
$sms = new bello();
$sms->papito();

$msg = new para();
$msg->domocha();
 ?>
