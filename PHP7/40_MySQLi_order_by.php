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

$sql = "SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname";
$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result)>0)
{
  while($row=mysqli_fetch_assoc($result))
  {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
}
else {
  echo "0 result";
}
 ?>
