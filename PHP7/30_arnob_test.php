<?php
$credit = array("CSE-101"=>3, "EEE-163"=>3, "MATH-141"=>3, "HUM-415"=>2);
$gpa = array("CSE-101"=>3, "EEE-163"=>3.25, "MATH-141"=>4, "HUM-415"=>4);
$total_gpa_sum = 0;
$total_credit = 0;
$cgpa = 0;
foreach ($credit as $key1 => $value1)
{
  foreach ($gpa as $key2 => $value2)
  {
    if($key1 == $key2)
    {
      $total_credit = $total_credit + $value1;
      $total_gpa_sum = $total_gpa_sum + ($value1 * $value2);
    }
  }
}
$cgpa = $total_gpa_sum / $total_credit;
echo round($cgpa,2);
 ?>
