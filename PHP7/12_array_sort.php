<?php

$arr = array(5,1,2,7,5,3,6);
sort($arr);
$len = count($arr);

for($i=0;$i<$len;$i++)
{
  echo "$arr[$i] <br>";
}

rsort($arr);
echo "array_reverse<br>";
for($i=0;$i<$len;$i++)
{
  echo "$arr[$i] <br>";
}
 ?>
