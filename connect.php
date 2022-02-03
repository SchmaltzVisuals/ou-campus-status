<?php
// Script to open a connection to the database
// Connection details
$hostname = "xxx";
$username = "xxx";
$password = "xxx";
$db_name = "xxx";
// Connect to mySQL
$connect = new mysqli($hostname, $username, $password, $db_name);
// Check connection
if ($connect->connect_error){
  die("Connection to database failed: " . $connect->connect_error . "<br />");
}
 ?>
