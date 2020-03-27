<?php

function msg($name = "pritilata biswas")
{
  echo "$name received <br>";
  return strrev($name);
}

$txt=msg("arik");
echo "$txt<br>";
$txt=msg();
echo "$txt<br>";

 ?>
