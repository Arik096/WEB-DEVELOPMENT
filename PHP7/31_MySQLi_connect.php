<?php
$servername = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($servername, $username, $password);

if(!$con)
{
  die("Connection error: ".mysqli_connect_error());
}
else {
  echo "Successfully connected";
}

 ?>
