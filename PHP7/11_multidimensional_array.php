<?php

$car = array(
  array("BMW",10,12),
  array("AUDI",20,23),
  array("Nissan",24,56)
);

for($i=0;$i<3;$i++)
{
  for($j=0;$j<3;$j++)
  {
    if($j==0)
    {
      echo "My Car ".$car[$i][$j];
    }
    else
    {
      echo "<ul> <li> ".$car[$i][$j]." </li> </ul>";
    }
  }
}

 ?>
