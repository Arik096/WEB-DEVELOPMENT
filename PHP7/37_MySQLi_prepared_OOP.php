<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webDB";

$con = new mysqli($servername, $username, $password,$dbname);

if($con->connect_error)
{
  die("Error: ".$con->connect_error);
}

$stmt = $con->prepare("insert into MyGuests(firstname, lastname, email) values (?, ?, ?)");
$stmt->bind_param("sss",$fname,$lname,$email);

$fname = "arik";
$lname = "isthiaque";
$email = "arikbncc@gmail.com";
$stmt->execute();

$fname = "John";
$lname = "Doe";
$email = "john@example.com";
$stmt->execute();

$fname = "Mary";
$lname = "Moe";
$email = "mary@example.com";
$stmt->execute();

$fname = "Julie";
$lname = "Dooley";
$email = "julie@example.com";
$stmt->execute();

$stmt->close();
$con->close();
 ?>
