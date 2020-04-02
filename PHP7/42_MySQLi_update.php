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

$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=24";

if(mysqli_query($con, $sql))
{
  echo "updated";
}
else {
  echo "error".mysqli_error($con);
}
 ?>
