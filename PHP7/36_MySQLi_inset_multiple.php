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

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Julie', 'Dooley', 'julie@example.com')";

if(mysqli_multi_query($con, $sql))
{
  echo "inserted all ";
}
else {
  echo "Error :".mysqli_error($con);
}
 ?>
