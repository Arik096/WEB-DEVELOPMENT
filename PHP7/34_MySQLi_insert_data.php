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

$sql = "insert into MyGuests(firstname, lastname, email) values('John', 'Doe', 'john@example.com')";

if(mysqli_query($con, $sql))
{
  echo "inserted";
}
else {
  echo "Error :".mysqli_error($con);
}
 ?>
