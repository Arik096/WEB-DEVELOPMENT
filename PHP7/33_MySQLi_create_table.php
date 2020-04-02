<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webDB";

$con = mysqli_connect($servername, $username, $password,$dbname);

if(!$con)
{
  die("Error : ".mysqli_connect_error());
}
else {
  echo "connected, bingo<br>";
}

$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if(mysqli_query($con, $sql))
{
  echo "created";
}
else {
  echo "Error :".mysqli_error($con);
}
 ?>
