<?php
class welcome{
  public static function greet()
  {
    echo "bello,papito<br>";
  }
  public function msg()
  {
    self::greet();
  }
}
welcome::greet();

$sms = new welcome();
$sms->msg();
 ?>
