<?php
$servername = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($servername, $username, $password);

if(!$con)
{
  die("Error".mysqli_connect_error());
}
else {
  echo "connected, bingo<br>";
}

$sql = "create database webDB";
if(mysqli_query($con, $sql))
{
  echo "created, bingo<br>";
}
else {
  echo "Error: ".mysqli_error($con);
}

 ?>
