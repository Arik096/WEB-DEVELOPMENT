<?php
$txt = "arik";
$txt2 = "I am Arik Md. Isthiaque";

echo strlen($txt);
echo "<br>";

echo str_word_count($txt2);
echo "<br>";

echo strrev($txt2);
echo "<br>";

echo strpos($txt2,"Md");
echo "<br>";

echo str_replace("Arik",$txt,$txt2);

 ?>
