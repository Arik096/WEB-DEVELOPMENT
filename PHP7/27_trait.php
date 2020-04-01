<?php

trait SMS_1
{
  function sms1()
  {
    echo "Hello wrold<br>";
  }
}
trait SMS_2
{
  function sms2()
  {
    echo "bello, papito<br>";
  }
}
class Welcome_1{
  use SMS_1;
}
class Welcome_2{
  use SMS_1, SMS_2;
}
$msg = new Welcome_1();
$msg->sms1();

$msg_1 = new Welcome_2();
$msg_1->sms1();
$msg_1->sms2();
 ?>
