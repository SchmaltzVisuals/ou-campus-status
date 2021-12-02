<?php
require "connect.php";
$busyOrNotBusy = $_POST['reportButton'];
$entityType = $_POST['entityType'];
$entityID = $_POST['entityId'];

/*
echo $busyOrNotBusy;
echo $entityType;
echo $entityID;
*/

// Select entity that the user reported
$sql = "select * from $entityType where id='$entityID'";
$result = $connect->query($sql);
while ($row = $result->fetch_assoc()){
  // Save entity name
  $entityName = $row['name'];
  // Save number of reports from database
  $dbReports = $row['reports'];
}

// If the user clicked Report as Busy
if ($busyOrNotBusy == 'busy') {
  // Add 1 report
  $newReports = $dbReports + 1;
// If the user clicked Report as Not Busy
} else if ($busyOrNotBusy == 'notbusy') {
  // Subtract 1 report
  $newReports = $dbReports - 1;
}

// Insert new number of reports back into the database
$sql = "UPDATE $entityType SET reports='$newReports' WHERE id='$entityID'";
// Verify insertion was successful
if ($connect->query($sql) === TRUE) {
  header("Location: home.php");
  exit();
} else {
  echo "Error: " . $sql . "<br>" . $connect->error;
}

// Close the database connection
$connect -> close();
 ?>
