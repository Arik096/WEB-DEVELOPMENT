<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webDB";

$con = mysqli_connect($servername, $username, $password, $dbname);

if(!$con)
{
  die("Error :".mysqli_connect_error());
}

$sql = "DELETE FROM MyGuests WHERE id=15";

if(mysqli_query($con, $sql))
{
  echo "deleted";
}
else {
  echo "error".mysqli_error($con);
}
 ?>
